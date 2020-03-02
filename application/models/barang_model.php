
<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class barang_model extends CI_Model{
    public function  getAllbarang()
    {
       return $this->db->get('barang')->result(); ///data_barang
    }

    public function  getAllsupplier()
    {
       return $this->db->get('data_supplier')->num_rows();
    }

    public function all()
    {
        $this->db->select('*');
        $this->db->from('barang');///data_barang
        $query = $this->db->get();
        return $query->result();
    }

    function data($number, $offset){
        
         return $query = $this->db->get('barang',$number,$offset)->result();///data_barang
        // return $this->db->query("call barang();");
    }

    public function getCariBarang($katakuncibarang)
    {
        $this->db->select('*');
        $this->db->from('barang');///data_barang
        $this->db->like('nama_barang', $katakuncibarang);

        $query = $this->db->get();
        return $query->result();
    }

    public function addbarangBarang()
    {
        $data = [
            "kode_barang" => $this->input->post('kode_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "harga_jual" => $this->input->post('harga_jual', true),
            "jumlah_barang" => $this->input->post('jumlah_barang', true),
            "limitasi" => $this->input->post('limitasi', true)
            // "kodesupplier" => $this->input->post('kodesupplier', true) 
            
            // "kelasproduct" => $this->input->post('kelasproduct', true),
            // "alamatbarang" => $this->input->post('alamatbarang', true)

        ];
         
        $this->db->insert('barang', $data);///data_barang
    }

    public function hapusbarang($kode_barang)
    {
        $this->db->where('kode_barang', $kode_barang);
       $this->db->delete('barang', ['kode_barang' => $kode_barang ]); ///data_barang

    }

    public function getBarangById($kode_barang)
    {
       return $this->db->get_where('barang', ['kode_barang' => $kode_barang])->row_array();///data_barang
    }

    public function updatebarang()
    {
        $data = [
            "kode_barang" => $this->input->post('kode_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "harga_jual" => $this->input->post('harga_jual', true),
            "jumlah_barang" => $this->input->post('jumlah_barang', true),
            "limitasi" => $this->input->post('limitasi', true),
            // "kodesupplier" => $this->input->post('kodesupplier', true)
            

        ];
        $this->db->where('kode_barang', $this->input->post('kode_barang'));
        $this->db->update('barang', $data);///data_barang
        // $this->db->join('data_supplier', 'kodesupplier = kodesupplier', 'left');
        
    }

    public function getJumlahProduk()
    {
       $barang = $this->db->query("SELECT count(kode_barang) as 'Jumlah' FROM barang")->result();///data_barang
       return $barang;
    }

}

?>