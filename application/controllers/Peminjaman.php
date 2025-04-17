<?php
class Peminjaman extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Peminjaman_model');
        $this->load->model('Barang_model');
    }

    public function index() {
        $data['peminjaman'] = $this->Peminjaman_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('peminjaman/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['barang'] = $this->Barang_model->get_all();

        if ($this->input->post()) {
            $id_barang = $this->input->post('id_barang');
            $jumlah = $this->input->post('jumlah');
            $barang = $this->Barang_model->get_by_id($id_barang);

            // Validasi stok
            if ($barang->stok < $jumlah) {
                $this->session->set_flashdata('error', 'Stok tidak mencukupi!');
                redirect('peminjaman/tambah');
            }

            // Menambahkan data peminjaman dengan tanggal dan waktu
            $data_peminjaman = [
                'nama_peminjam' => $this->input->post('nama_peminjam'),
                'id_barang' => $id_barang,
                'jumlah' => $jumlah,
                'tanggal_pinjam' => date('Y-m-d H:i:s'), // Menambahkan waktu juga
            ];

            $this->Peminjaman_model->insert($data_peminjaman);

            // Kurangi stok barang
            $this->Barang_model->update($id_barang, ['stok' => $barang->stok - $jumlah]);

            redirect('peminjaman');
        }

        $this->load->view('templates/header');
        $this->load->view('peminjaman/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function kembalikan($id) {
        $peminjaman = $this->Peminjaman_model->get_by_id($id);
        $barang = $this->Barang_model->get_by_id($peminjaman->id_barang);

        // Tambahkan kembali stok barang
        $this->Barang_model->update($barang->id_barang, ['stok' => $barang->stok + $peminjaman->jumlah]);

        $this->Peminjaman_model->kembalikan($id);
        redirect('peminjaman');
    }

    public function filter() {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');

        if ($dari && $sampai) {
            $data['peminjaman'] = $this->Peminjaman_model->filter_by_date($dari, $sampai);
        } else {
            $data['peminjaman'] = $this->Peminjaman_model->get_all();
        }

        $this->load->view('templates/header');
        $this->load->view('peminjaman/laporan_filter', $data);
        $this->load->view('templates/footer');
    }
}
