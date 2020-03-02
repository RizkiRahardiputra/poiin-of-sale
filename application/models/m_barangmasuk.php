<?php

class m_barangmasuk extends CI_Model{

    public function getAllbarangmasuk()
    {
        $this->db->join('pengadaan_barang', 'kodesupplier');
        $this->db->join('data_barang', 'kodebarang');
        $this->db->join('kartustok','kodebarang');
        $this->db->join('barangmasuk','kodekartu');
        return $this->db->get('data_supplier')->result_array();
    }

    public function updatebarangmasuk()
    {
        $data = [
            "jumlah" => $this->input->post('jumlah', true),
            "hargajualbarang" => $this->input->post('hargajualbarang', true)
        ];
    
        $this->db->update('barangmasuk', $data);
        $this->db->where('kodekartu', $this->input->post('kodekartu'));

    // public function updatebarangmasuk($namaproduk,$jumlah,$satuan,$harga,$tglmasuk,$namatoko)
    // {
    //     $hasil=$this->db->query("UPDATE barangmasuk SET namaproduk='namaproduk',jumlah='jumlah',satuan='satuan',harga='harga',tglmasuk='tglmasuk',namatoko='namatoko' WHERE barcode='$barcode'");
    //     return $hasil;
    }
        
        // $data['barangmasuk'] = $this->m_barangmasuk->getAllbarangmasuk();
        // $this->db->select('jumlah');
        // $this->db->select('harga');
        // $this->db->from('barangmasuk');
        // ];
        
        // $query = $this->db->get();
        // return $query->result();
        
    // }
    public function searchbarangmasuk()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('namaproduk', $keyword);
        return $this->db->get('barangmasuk')->result_array();
    }
}
 