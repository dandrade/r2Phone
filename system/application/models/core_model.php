<?php
	class Core_Model extends Model
	{
		function Core_Model()
		{
			parent::Model();
		}
		
		function get($query = "")
		{
			if($query != "")
			{
				$q = $this->db->query($query);
				if($q->num_rows() > 0)
				{
					return $q->result();
				}
			}
			return false;
		}
		
		function getAll($table = "", $where = "")
		{
			if($table != "")
			{
				if($where != "")
				{
					$query = $this->db->where($where);
				}
				$query = $this->db->get($table);
				return $query->result();
			}
		}

		function getRow($table = "", $where = "")
		{
			if($table != "")
			{
				if($where != "")
				{
					$query = $this->db->where($where);
				}
				$query = $this->db->get($table);
				return $query->row();
			}
			
		}
	}
?>