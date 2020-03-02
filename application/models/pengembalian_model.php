        <?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class pengembalian_model extends CI_Model{
    public function  getAllpengadaan()
    {
       return $this->db->get('pengadaan_barang')->num_rows();
    }

    public function  getAllpengembalian()
    {
       
        // return $this->db->get('pengembalian_barang')->result();
    //    $this->db->select('*');
    //    $this->db->from('pengembalian_barang p');
    //    $this->db->join('pengadaan_barang b', 'p.idpengadaan = b.idpengadaan');
    //    $this->db->join('barang c', 'b.kode_barang = c.kode_barang', 'inner');
    //    $query = $this->db->get();
    //    return $query->result();
    $this->db->from('pengembalian_barang p');
    $this->db->join('pengadaan_barang b', 'p.idpengadaan = b.idpengadaan');
    $this->db->join('barang c', 'b.kode_barang = c.kode_barang');
    $this->db->join('supplier s', 'p.id_supplier = s.id_supplier');


    $query = $this->db->get();
    return $query->result();
    }

    public function  getAllsupplier()
    {
       return $this->db->get('supplier')->num_rows();
    }

    public function  getAllbarang()
    {
       return $this->db->get('barang')->num_rows();
    }

    // public function getAllpermintaan(){

    // }

    function datapengembalian($number,$offset){
       
        // $this->db->from('barang d');
        // $this->db->join('pengadaan_barang b', 'd.kode_barang=b.kode_barang');
        // $this->db->join('supplier t', 'b.id_supplier=t.id_supplier');

        // $this->db->join('pengembalian_barang h', 'b.id_pengembalian=h.id_pengembalian');
        
        // $this->db->from('pengembalian_barang');
        $this->db->from('pengembalian_barang p');
        $this->db->join('pengadaan_barang b', 'p.idpengadaan = b.idpengadaan');
        $this->db->join('barang c', 'b.kode_barang = c.kode_barang');
        $this->db->join('supplier s', 'p.id_supplier = s.id_supplier');


        $query = $this->db->get();
        return $query->result();
    }

    public function getCariPengembalian($katakuncipengembalian)
    {
        $this->db->from('pengembalian_barang p');
        $this->db->join('pengadaan_barang b', 'p.idpengadaan = b.idpengadaan');
        $this->db->join('barang c', 'b.kode_barang = c.kode_barang');
        $this->db->join('supplier s', 'p.id_supplier = s.id_supplier');

    //    $this->db->select('pengembalian_barang.id_pengembalian,tgl_pengembalian,jumlah_pengembalian,alasan_pengembalian,idpengadaan, id_supplier');
    //     $this->db->from('pengembalian_barang');
        $this->db->like('id_pengembalian', $katakuncipengembalian);

        $query = $this->db->get();
        return $query->result();
    }

    public function addpengembalianPengembalian()
    {
        
        $datapengembalian = [
            // "id_pengembalian" => $this->input->post('id_pengembalian', true),
            // "tgl_pengembalian" => $this->input->post('tgl_pengembalian', true),
            "jumlah_pengembalian" => $this->input->post('jumlah_pengembalian', true),
            "alasan_pengembalian" => $this->input->post('alasan_pengembalian', true),
            // "idpengadaan" => $this->input->post('idpengadaan', true),
            "idpengadaan" => $this->input->post('idpengadaan', true),
            "id_supplier" => $this->input->post('id_supplier', true)
            
        ];
         
        $this->db->insert('pengembalian_barang', $datapengembalian);
    }

    public function hapuspengembalian($id_pengembalian)
    {
        $this->db->where('id_pengembalian', $id_pengembalian);
        $this->db->delete('pengembalian_barang', ['id_pengembalian' => $id_pengembalian ]); 

    }

    public function getPengembalianById($id_pengembalian)
    {
        $this->db->select('pengembalian_barang.id_pengembalian,tgl_pengembalian,jumlah_pengembalian,alasan_pengembalian,idpengadaan, id_supplier ');
       return $this->db->get_where('pengembalian_barang', ['id_pengembalian' => $id_pengembalian])->row_array();
    }

    public function updatepengembalian()
    {
        $datapengembalian = [
            // "kode_barang" => $this->input->post('kode_barang', true),
            // "tgl_pengembalian" => $this->input->post('tgl_pengembalian', true),
            "jumlah_pengembalian" => $this->input->post('jumlah_pengembalian', true),
            "alasan_pengembalian" => $this->input->post('alasan_pengembalian', true),
            "idpengadaan" => $this->input->post('idpengadaan', true),
            // "nama_barang" => $this->input->post('nama_barang', true),
            // "idpengadaan" => $this->input->post('idpengadaan', true),
            "id_supplier" => $this->input->post('id_supplier', true)
            

        ];
        $this->db->where('id_pengembalian', $this->input->post('id_pengembalian'));
        $this->db->update('pengembalian_barang', $datapengembalian);
        // $this->db->join('data_supplier', 'id_supplier = id_supplier', 'left');
        
    }

    public function getJumlahPengembalian()
    {
        // $this->db->from('barang d');
        // $this->db->join('pengadaan_barang b', 'd.kode_barang=b.kode_barang');
        // $this->db->join('supplier t', 'b.id_supplier=t.id_supplier');

        $this->db->from('pengembalian_barang p');
        $this->db->join('pengadaan_barang b', 'p.idpengadaan = b.idpengadaan');
        $this->db->join('barang c', 'b.kode_barang = c.kode_barang');
        $this->db->join('supplier s', 'p.id_supplier = s.id_supplier');

        // $query = $this->db->get();
        // return $query = $this->db->get('pengadaan_barang',$number,$offset)->result();
         $query = $this->db->get();
        return $query->result();
        // print_r($pengadaan);die();
    }

    public function JumlahCetak()
    {
        $pengadaan = $this->db->query("SELECT count(id_pengembalian) as 'Jumlah' FROM pengembalian_barang")->result();
        return $pengadaan;
    }
    

}