<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class permintaan_model extends CI_Model{
    public function getAllpermintaan(){
        // return $this->db->get('permintaan_barang')->result();

        $this->db->from('barang d');//data_barang
        $this->db->join('permintaan_barang b', 'd.kode_barang=b.kode_barang');
        $this->db->join('supplier t', 'b.id_supplier=t.id_supplier');

        // $this->db->join('permintaan_barang i', 'b.id_permintaan=i.id_permintaan');

         $query = $this->db->get();
        return $query->result();

    }
    public function  getAllpengadaan()
    {
        // $this->db->select('*');
        // $this->db->from('pengadaan_barang p');
        // $this->db->join('barang b', 'p.kode_barang = b.kode_barang');
        // $query = $this->db->get();
        // return $query->result();
        return $this->db->get('pengadaan_barang')->num_rows();

    }

    public function  getAllpengembalian()
    {
        $this->db->select('*');
        $this->db->from('pengadaan_barang p');
        $this->db->join('barang b', 'p.kode_barang = b.kode_barang');
        $query = $this->db->get();
        return $query->result();
        // return $this->db->get('pengadaan_barang')->num_rows();

    }

    public function all()
    {
        $this->db->select('*');
        $this->db->from('permintaan_barang');
        $query = $this->db->get();
        return $query->result();
    }

    public function  getAllsupplier()
    {
       return $this->db->get('supplier')->num_rows();
    }

    public function  getAllbarang()
    {
       return $this->db->get('barang')->num_rows(); //data_barang
    }

    

    function datapermintaan($number,$offset){
       
        $this->db->from('barang d');//data_barang
        $this->db->join('permintaan_barang b', 'd.kode_barang=b.kode_barang');
        $this->db->join('supplier t', 'b.id_supplier=t.id_supplier');

        // $this->db->join('permintaan_barang i', 'b.id_permintaan=i.id_permintaan');

         $query = $this->db->get();
        return $query->result();
    }

    public function getCariPermintaan($katakuncipermintaan)  ///////////////////////////////////////////////////////////
    {
       $this->db->select('permintaan_barang.id_permintaan,tgl_permintaan,jumlah_permintaan,id_supplier,kode_barang');
        $this->db->from('pengadaan_barang');
        $this->db->like('id_permintaan', $katakuncipermintaan);

        $query = $this->db->get();
        return $query->result(); ///////////////////////////'
    }

    public function addpengadaanPengadaan()
    {
        // $jmlbeli = $this->input->post('jumlahbeli');
        // $hargabeli = $this->input->post('hargabeli');
        // $total = $jmlbeli * $hargabeli ;
        $datapermintaan = [
            "id_permintaan" => $this->input->post('id_permintaan', true),
            "tgl_permintaan" => $this->input->post('tgl_permintaan', true),
            "jumlah_permintaan" => $this->input->post('jumlah_permintaan', true),
            // "hargabeli" => $this->input->post('hargabeli', true),
            "id_supplier" => $this->input->post('id_supplier', true),
            // "id_permintaan" => $this->input->post('id_permintaan', true),
            "kode_barang" => $this->input->post('kode_barang', true)
            // "total" => $total
        ];
         
        $this->db->insert('permintaan_barang', $datapermintaan);
    }

    public function hapuspermintaan($id_permintaan)
    {
        $this->db->where('id_permintaan', $id_permintaan);
       $this->db->delete('permintaan_barang', ['id_permintaan' => $id_permintaan ]); 

    }

    public function getPermintaanById($id_permintaan)
    {
        $this->db->select('permintaan_barang.id_permintaan,tgl_permintaan,jumlah_permintaan, kode_barang, id_supplier');
       return $this->db->get_where('permintaan_barang', ['id_permintaan' => $id_permintaan])->row_array();
    }

    public function updatepermintaan()
    {
        // $jmlbeli = $this->input->post('jumlahbeli');
        // $hargabeli = $this->input->post('hargabeli');
        // $total = $jmlbeli * $hargabeli ;
        $datapermintaan = [
            // "kode_barang" => $this->input->post('kode_barang', true),
            "tgl_permintaan" => $this->input->post('tgl_permintaan', true),
            "jumlah_permintaan" => $this->input->post('jumlah_permintaan', true),
            // "hargabeli" => $this->input->post('hargabeli', true),
            "kode_barang" => $this->input->post('kode_barang', true),
            "id_supplier" => $this->input->post('id_supplier', true),
            // "total" => $total
            

        ];
        $this->db->where('id_permintaan', $this->input->post('id_permintaan'));
        $this->db->update('permintaan_barang', $datapermintaan);
        // $this->db->join('data_supplier', 'id_supplier = id_supplier', 'left');
        
    }
    

    public function getJumlahPermintaan()
    {
        $this->db->from('barang d');
        $this->db->join('permintaan_barang b', 'd.kode_barang=b.kode_barang');
        $this->db->join('supplier t', 'b.id_supplier=t.id_supplier');

        // $query = $this->db->get();
        // return $query = $this->db->get('pengadaan_barang',$number,$offset)->result();
         $query = $this->db->get();
        return $query->result();
        // print_r($pengadaan);die();
    }

    public function getJumlahPermintaanById($id_permintaan)
    {

        $this->db->from('barang d');//data_barang
        $this->db->join('permintaan_barang b', 'd.kode_barang=b.kode_barang');
        $this->db->join('supplier t', 'b.id_supplier=t.id_supplier');
        $this->db->where('id_permintaan',$id_permintaan);

        // $this->db->from('barang d');
        // $this->db->join('permintaan_barang b', 'd.kode_barang=b.kode_barang');
        // $this->db->join('supplier t', 'b.id_supplier=t.id_supplier');
        // $this->db->where('id_permintaan');

         $query = $this->db->get();
        return $query->result();
        
    }

    public function JumlahCetak()
    {
        $pengadaan = $this->db->query("SELECT count(id_permintaan) as 'Jumlah' FROM permintaan_barang")->result();
        return $pengadaan;
    }

       // $pengadaan = $this->db->query("SELECT count(idpengadaan) as 'Jumlah' FROM pengadaan_barang")->result();
       // return $pengadaan;
    }



?>