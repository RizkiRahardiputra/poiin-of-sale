<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class customers_model extends CI_Model{
   
    public function getJumlahCustomers()
    {
       $customers = $this->db->query("SELECT count(idcustomers) as 'Jumlah' FROM customers")->result();
       return $customers;
    }

}

?>