<?php
class Kategori extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kategori_model');
    }

    public function index() {
        $data['kategori'] = $this->Kategori_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        if ($this->input->post()) {
            $data = ['nama_kategori' => $this->input->post('nama_kategori')];
            $this->Kategori_model->insert($data);
            redirect('kategori');
        }

        $this->load->view('templates/header');
        $this->load->view('kategori/tambah');
        $this->load->view('templates/footer');
    }

    public function edit($id) {
        $data['kategori'] = $this->Kategori_model->get_by_id($id);

        if ($this->input->post()) {
            $updateData = ['nama_kategori' => $this->input->post('nama_kategori')];
            $this->Kategori_model->update($id, $updateData);
            redirect('kategori');
        }

        $this->load->view('templates/header');
        $this->load->view('kategori/edit', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id) {
        $this->Kategori_model->delete($id);
        redirect('kategori');
    }
}
