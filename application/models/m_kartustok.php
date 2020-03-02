<?php

class m_kartustok extends CI_Model{

    public function getAllkartuStok()
    {
        $this->db->join('pengadaan_barang', 'kodesupplier');
        $this->db->join('data_barang', 'kodebarang');
        $this->db->join('kartustok','kodebarang');
        $query = $this->db->get('data_supplier')->result();
        
    //    $query = $this->db->query('SELECT m.kodemasuk, o.kodekeluar, r.koderefund, d.kodebarang, 
    //    d.namabarang, p.jumlahbeli, d.satuanstok, p.hargabeli, s.namaoutlet, 
    //    p.tglpengadaan FROM kartustok k 
    //    JOIN data_barang d ON k.kodebarang = d.kodebarang 
    //    JOIN pengadaan_barang p ON d.kodebarang = p.kodebarang 
    //    JOIN data_supplier s ON p.kodesupplier = s.kodesupplier 
    //    JOIN barangmasuk m ON k.kodemasuk = m.kodemasuk 
    //    JOIN barangkeluar o ON k.kodekeluar = o.kodekeluar 
    //    JOIN barangrefund r ON k.koderefund = r.koderefund')->result();
       
        return $query;
    }

    // public function editData($barcode, $namaproduk,$namatoko,$jumlah,$harga)
    // {
    //     $data = array(
    //         'barcode' => $barcode,
    //         'namaproduk' => $namaproduk,
    //         'namatoko' => $namatoko,
    //         'jumlah' => $jumlah,
    //         'harga' => $harga,
    //         'tglmasuk' => mdate('%Y-%m-%d %H:%i:%s', NOW())
    //     );
        
    //     $this->db->where('barcode', $barcode);
    //     $this->db->update('barangmasuk', $data);
        
    // }

    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
    }

    function data($number,$offset){
        return $this->db->get('barangmasuk',$number,$offset)->result();		
    }
     
    function jumlah_data(){
        return $this->db->get('barangmasuk')->num_rows();
    }
    
    // public function getbarangmasuk($barcode)
    // {
    //     // $data = [
    //     //     "barcode" => $this->input->post('barcode', true),
    //     //     "namaproduk" => $this->input->post('namaproduk', true),
    //     //     "namatoko" => $this->input->post('namatoko', true),
    //     //     "jumlah" => $this->input->post('jumlahtersedia', true),
    //     //     "harga" => $this->input->post('harga', true)
    //     // ];
    
    //     // $this->db->from('barangmasuk');
    //     // $query = $this->db->get();
    //     // return $query->result();
    //     return $this->db->get_where('barangmasuk',['barcode' => $barcode])->row_array();

    // }
    public function wherebarangmasuk($kodekartu)
    {
        $this->db->join('pengadaan_barang', 'kodesupplier');
        $this->db->join('data_barang', 'kodebarang');
        $this->db->join('kartustok','kodebarang');
        $query = $this->db->get_where('data_supplier', array('kodebarang'=>$kodekartu))->row_array();
        return $query;
    }
    public function getbarangmasukid($kodemasuk)
    {
       $query =  $this->db->query("SELECT l.kodesupplier, b.kodebarang, b.namabarang, l.namaoutlet, p.jumlahbeli, a.kodemasuk  
       FROM kartustok s JOIN data_barang b ON b.kodebarang = s.kodebarang 
       JOIN pengadaan_barang p ON b.kodebarang = p.kodebarang 
       JOIN data_supplier l ON p.kodesupplier = l.kodesupplier 
       JOIN barangmasuk a ON s.kodemasuk = a.kodemasuk 
       WHERE a.kodemasuk = '$kodemasuk'")->row_array();
        return $query;
    }

    public function insertKartuStok($kodekartu ,$jumlahmasuk ,$sum, $harga, $tanggal)
    {
        $array = array('kodekartu'=> $kodekartu ,'jumlahmasuk' => $jumlahmasuk,'hargajualbarang'=>$harga, 'tglmasuk'=>$tanggal) ;
        $this->db->insert('barangmasuk', $array);
        $data = array('jumlahbarang' => $sum);
        $this->db->update('kartustok', $data,array('kodekartu' => $kodekartu));
        
    }

    public function getbarangkeluarid($barcode)
    {
        return $this->db->get_where('barangmasuk', ['barcode' => $barcode])->row_array();
    }
    // public function updatebarangmasuk($namaproduk,$jumlah,$satuan,$harga,$tglmasuk,$namatoko)
    // {
    //     $hasil=$this->db->query("UPDATE barangmasuk SET namaproduk='namaproduk',jumlah='jumlah',satuan='satuan',harga='harga',tglmasuk='tglmasuk',namatoko='namatoko' WHERE barcode='$barcode'");
    //     return $hasil;
   
        
        // $data['barangmasuk'] = $this->m_barangmasuk->getAllbarangmasuk();
        // $this->db->select('jumlah');
        // $this->db->select('harga');
        // $this->db ->from('barangmasuk');
        // ];
        
        // $query = $this->db->get();
        // return $query->result();
        
    // }
    public function searchbarangmasuk()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('namabarang','barcode', $keyword);
        return $this->db->get('barangmasuk')->result_array();
    }
}
 