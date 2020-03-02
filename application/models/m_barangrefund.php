<?php

class m_barangrefund extends CI_Model
{
    public function getdata($where)
    {
        $data = $this->db->get_where('kartustok',array('kodekartu' => $where))->result();
        return $data;
    }
    public function refund($data)
    {
        $this->db->insert('barangrefund',$data);
    }
    public function hapusrefund($where,$table)
    {
        $this->db->where($where);
		$this->db->delete($table);
    }

}

