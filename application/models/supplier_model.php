<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class supplier_model extends CI_Model{
    public function  getAllsupplier()
    {
       return $this->db->get('supplier')->result();
    }
     public function  getAllhistorysupplier()
    {
       return $this->db->get('history_data_supplier')->num_rows();
    }

    function datasupplier($number,$offset){
        return $query = $this->db->get('supplier',$number,$offset)->result();
    }

     function historydatasupplier($number,$offset){
        return $query = $this->db->get('history_data_supplier',$number,$offset)->result();
    }

    public function all()
    {
        $this->db->select('*');
        $this->db->from('supplier');
        $query = $this->db->get();
        return $query->result();
    }

    public function getCariSupplier($katakuncisupplier)
    {
        $this->db->select('*');
        $this->db->from('supplier');
        $this->db->like('nama_supplier', $katakuncisupplier);

        $query = $this->db->get();
        return $query->result();
    }

    public function addsupplierSupplier()
    {
        $datasupplier = [
            "id_supplier" => $this->input->post('id_supplier', true),
            "nama_supplier" => $this->input->post('nama_supplier', true),
            "telp_supplier" => $this->input->post('telp_supplier', true),
            "email_supplier" => $this->input->post('email_supplier', true),
            // "nama_suppliert" => $this->input->post('nama_suppliert', true),
            "alamat_supplier" => $this->input->post('alamat_supplier', true)
            // "kelasproduct" => $this->input->post('kelasproduct', true),
            // "alamat_supplier" => $this->input->post('alamat_supplier', true)

        ];

        $this->db->insert('supplier', $datasupplier);
    }

    public function hapussupplier($id_supplier)
    {
        $this->db->where('id_supplier', $id_supplier);
       $this->db->delete('supplier', ['id_supplier' => $id_supplier ]); 

    }

    public function getSupplierById($id_supplier)
    {
       return $this->db->get_where('supplier', ['id_supplier' => $id_supplier])->row_array();
    }

    public function updatesupplier()
    {
        $datasupplier = [
           "id_supplier" => $this->input->post('id_supplier', true),
            "nama_supplier" => $this->input->post('nama_supplier', true),
            "telp_supplier" => $this->input->post('telp_supplier', true),
            "email_supplier" => $this->input->post('email_supplier', true),
            // "nama_suppliert" => $this->input->post('nama_suppliert', true),
            "alamat_supplier" => $this->input->post('alamat_supplier', true)

        ];
        $this->db->where('id_supplier', $this->input->post('id_supplier'));
        $this->db->update('supplier', $datasupplier);
    }

//   function edit_data($where,$table){        
//     return $this->db->get_where($table,$where);
// }

// public function update_data($id_supplier, $nama_supplier, $telp_supplier, $email_supplier, $nama_suppliert, $alamat_suppliert){

//       $data = array(
//         'id_supplier' => $id_supplier,
//         'nama_supplier' => $nama_supplier,
//         'telp_supplier' => $telp_supplier,
//         'email_supplier' => $email_supplier,
//         'nama_suppliert' => $nama_suppliert,
//         'alamat_suppliert' => $alamat_suppliert
//     );
//         $this->db->where('id_supplier', $id_supplier);
//         $this->db->update('supplier',$data);
//     }   


  

}

?>