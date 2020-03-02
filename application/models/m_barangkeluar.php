<?php

class m_barangkeluar extends CI_Model{

    public function getAllbarangkeluar()
    {
        $this->db->join('pengadaan_barang', 'kodesupplier');
        $this->db->join('data_barang', 'kodebarang');
        $this->db->join('kartustok','kodebarang');
        $this->db->join('barangkeluar','kodekartu');
        return $this->db->get('data_supplier')->result_array();
    }
    public function getAddbarangkeluar()
    {
        return $this->db->get('barangkeluar')->result_array();
    }
    public function searchbarangkeluar()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('namaproduk', $keyword);
        return $this->db->get('barangkeluar')->result_array();
    }

}
 