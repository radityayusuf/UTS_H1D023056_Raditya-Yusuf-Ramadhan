<?php
class Peminjaman_model extends CI_Model {

    public function get_all() {
        $this->db->select('peminjaman.*, barang.nama_barang');
        $this->db->from('peminjaman');
        $this->db->join('barang', 'barang.id_barang = peminjaman.id_barang');
        return $this->db->get()->result();
    }

    public function insert($data) {
        return $this->db->insert('peminjaman', $data);
    }

    public function kembalikan($id) {
        $this->db->set('status', 'dikembalikan');
        // ✅ Gunakan format lengkap dengan waktu
        $this->db->set('tanggal_kembali', date('Y-m-d H:i:s'));
        $this->db->where('id_pinjam', $id);
        return $this->db->update('peminjaman');
    }

    public function get_by_id($id) {
        return $this->db->get_where('peminjaman', ['id_pinjam' => $id])->row();
    }

    public function filter_by_date($dari, $sampai) {
        $this->db->where('tanggal_pinjam >=', $dari);
        $this->db->where('tanggal_pinjam <=', $sampai);
        $this->db->join('barang', 'barang.id_barang = peminjaman.id_barang');
        return $this->db->get('peminjaman')->result();
    }

}
