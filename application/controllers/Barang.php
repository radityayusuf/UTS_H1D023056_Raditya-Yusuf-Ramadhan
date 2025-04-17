<?php
class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index() {
        $data['barang'] = $this->Barang_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['kategori'] = $this->Barang_model->get_kategori();

        if ($this->input->post()) {
            $input = [
                'nama_barang' => $this->input->post('nama_barang'),
                'stok' => $this->input->post('stok'),
                'id_kategori' => $this->input->post('id_kategori')
            ];
            $this->Barang_model->insert($input);
            redirect('barang');
        }

        $this->load->view('templates/header');
        $this->load->view('barang/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id) {
        $data['barang'] = $this->Barang_model->get_by_id($id);
        $data['kategori'] = $this->Barang_model->get_kategori();

        if ($this->input->post()) {
            $input = [
                'nama_barang' => $this->input->post('nama_barang'),
                'stok' => $this->input->post('stok'),
                'id_kategori' => $this->input->post('id_kategori')
            ];
            $this->Barang_model->update($id, $input);
            redirect('barang');
        }

        $this->load->view('templates/header');
        $this->load->view('barang/edit', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id) {
        $this->Barang_model->delete($id);
        redirect('barang');
    }
}
