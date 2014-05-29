<?php 

	class mysql_model_takbeschrijvingen extends CI_Model {

		function GetAll() {
			$sql_GetAll = "SELECT * FROM Takken";
			$query_GetAll = $this->db->query($sql_GetAll);
			if($query_GetAll->num_rows() > 0) {
				foreach ($query_GetAll->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		function Kapoenen_beschrijving() {
			$sql_kapoenen = "SELECT * FROM Takken WHERE Tak = 'Kapoenen'";
			$query_kapoenen = $this->db->query($sql_kapoenen);
			if($query_kapoenen->num_rows() > 0) {
				foreach ($query_kapoenen->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		function Welpen() {
			$sql_welpen = "SELECT * FROM Takken WHERE Tak = 'Welpen'";
			$query_welpen = $this->db->query($sql_welpen);
			if($query_welpen->num_rows() > 0) {
				foreach ($query_welpen->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		function Jonggivers() {
			$sql_jonggivers = "SELECT * FROM Takken WHERE Tak = 'Jonggivers'";
			$query_jonggivers = $this->db->query($sql_jonggivers);
			if($query_jonggivers->num_rows() > 0) {
				foreach ($query_jonggivers->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		function Givers() {
			$sql_givers = "SELECT * FROM Takken WHERE Tak = 'Givers'";
			$query_givers = $this->db->query($sql_givers);
			if($query_givers->num_rows() > 0) {
				foreach ($query_givers->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		function Jins() {
			$sql_jins = "SELECT * FROM Takken WHERE Tak = 'Jins'";
			$query_jins = $this->db->query($sql_jins);
			if($query_jins->num_rows() > 0) {
				foreach ($query_jins->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		function Leiding() {
			$sql_leiding = "SELECT * FROM Takken WHERE Tak = 'Leiding'";
			$query_leiding = $this->db->query($sql_leiding);
			if($query_leiding->num_rows() > 0) {
				foreach ($query_leiding->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

	}