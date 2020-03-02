<?php 
 
class mtrans extends CI_Model{
function data($number,$offset){
		return $query = $this->db->get('trans',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('trans')->num_rows();
    }

    public function getTrans($idprod){
        $this->db->from('trans');
        $this->db->from('idprod', $idprod);

        $query = $this->db->get();
        return $query->result();

    }

    public function update($idprod,$namaprod,$jml,$hrg,$tothrg){
      $data = array(
          'idprod' => $idprod,
          'namaprod' => $namaprod,
          'jml' => $jml,
          'hrg' => $hrg,
          'tothrg' => $tothrg
      );
      $this->db->where('idprod', $idprod);
      $this->db->update('trans',$data);
  }

  public function hapus($idprod){
      $this->db->where('idprod',$idprod);
      $this->db->update('trans');
  }

  }