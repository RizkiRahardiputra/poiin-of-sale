<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class pengadaan_model extends CI_Model{
    public function  getAllpengadaan()
    {
        // $this->db->select('*');
        // $this->db->from('pengadaan_barang p');
        // $this->db->join('barang b', 'p.kode_barang = b.kode_barang');
        // $query = $this->db->get();
        // return $query->result();
        // return $this->db->get('pengadaan_barang')->result();


        $this->db->from('barang d');//data_barang
        $this->db->join('pengadaan_barang b', 'd.kode_barang=b.kode_barang');
        $this->db->join('supplier t', 'b.id_supplier=t.id_supplier');
        $this->db->join('permintaan_barang i', 'b.id_permintaan=i.id_permintaan');

    //    $this->db->select('pengadaan_barang.idpengadaan,tglpengadaan,jumlahbeli,hargabeli,kode_barang, id_supplier');
    //     $this->db->from('pengadaan_barang');
       

        $query = $this->db->get();
        return $query->result();

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

    public function  getAllsupplier()
    {
       return $this->db->get('supplier')->num_rows();
    }

    public function  getAllbarang()
    {
       return $this->db->get('barang')->num_rows(); //data_barang
    }

    public function getAllpermintaan(){
        return $this->db->get('permintaan_barang')->num_rows();
    }

    function datapengadaan($number,$offset){
       
        $this->db->from('barang d');//data_barang
        $this->db->join('pengadaan_barang b', 'd.kode_barang=b.kode_barang');
        $this->db->join('supplier t', 'b.id_supplier=t.id_supplier');
        $this->db->join('permintaan_barang i', 'b.id_permintaan=i.id_permintaan');


        // $this->db->join('permintaan_barang i', 'b.id_permintaan=i.id_permintaan');

         $query = $this->db->get();
        return $query->result();
    }

    public function getCariPengadaan($katakuncipengadaan)
    {
        $this->db->from('barang d');//data_barang
        $this->db->join('pengadaan_barang b', 'd.kode_barang=b.kode_barang');
        $this->db->join('supplier t', 'b.id_supplier=t.id_supplier');

    //    $this->db->select('pengadaan_barang.idpengadaan,tglpengadaan,jumlahbeli,hargabeli,kode_barang, id_supplier');
    //     $this->db->from('pengadaan_barang');
        $this->db->like('idpengadaan', $katakuncipengadaan);

        $query = $this->db->get();
        return $query->result();
    }

    public function addpengadaanPengadaan()
    {
        $jmlbeli = $this->input->post('jumlahbeli');
        $hargabeli = $this->input->post('hargabeli');
        $total = $jmlbeli * $hargabeli ;
        $datapengadaan = [
            "idpengadaan" => $this->input->post('idpengadaan', true),
            "tglpengadaan" => $this->input->post('tglpengadaan', true),
            "jumlahbeli" => $this->input->post('jumlahbeli', true),
            "hargabeli" => $this->input->post('hargabeli', true),
            "kode_barang" => $this->input->post('kode_barang', true),
            "id_permintaan" => $this->input->post('id_permintaan', true),
            "id_supplier" => $this->input->post('id_supplier', true),
            "total" => $total
        ];
         
        $this->db->insert('pengadaan_barang', $datapengadaan);
    }

    public function hapuspengadaan($idpengadaan)
    {
        $this->db->where('idpengadaan', $idpengadaan);
       $this->db->delete('pengadaan_barang', ['idpengadaan' => $idpengadaan ]); 

    }

    public function getPengadaanById($idpengadaan)
    {
        $this->db->select('pengadaan_barang.idpengadaan,tglpengadaan,jumlahbeli,hargabeli,id_permintaan,kode_barang, id_supplier, total');
       return $this->db->get_where('pengadaan_barang', ['idpengadaan' => $idpengadaan])->row_array();
    }

    public function updatepengadaan()
    {
        $jmlbeli = $this->input->post('jumlahbeli');
        $hargabeli = $this->input->post('hargabeli');
        $total = $jmlbeli * $hargabeli ;
        $datapengadaan = [

            // "kode_barang" => $this->input->post('kode_barang', true),
            "tglpengadaan" => $this->input->post('tglpengadaan', true),
            "jumlahbeli" => $this->input->post('jumlahbeli', true),
            "hargabeli" => $this->input->post('hargabeli', true),
            "kode_barang" => $this->input->post('kode_barang', true),
            "id_permintaan" => $this->input->post('id_permintaan', true),
            "id_supplier" => $this->input->post('id_supplier', true),
            "total" => $total
            
        ];
        $this->db->where('idpengadaan', $this->input->post('idpengadaan'));
        $this->db->update('pengadaan_barang', $datapengadaan);
        // $this->db->join('data_supplier', 'id_supplier = id_supplier', 'left');
        
    }
    

    public function getJumlahPengadaan()
    {
        $this->db->from('barang d');
        $this->db->join('pengadaan_barang b', 'd.kode_barang=b.kode_barang');
        $this->db->join('supplier t', 'b.id_supplier=t.id_supplier');
        $this->db->join('permintaan_barang i', 'b.id_permintaan=i.id_permintaan');


        // $query = $this->db->get();
        // return $query = $this->db->get('pengadaan_barang',$number,$offset)->result();
         $query = $this->db->get();
        return $query->result();
        // print_r($pengadaan);die();
    }

    public function JumlahCetak()
    {
        $pengadaan = $this->db->query("SELECT count(idpengadaan) as 'Jumlah' FROM pengadaan_barang")->result();
        return $pengadaan;
    }

       // $pengadaan = $this->db->query("SELECT count(idpengadaan) as 'Jumlah' FROM pengadaan_barang")->result();
       // return $pengadaan;
    }



?>