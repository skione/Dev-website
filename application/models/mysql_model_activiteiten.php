<?php 

	class mysql_model_activiteiten extends CI_Model {

		function Kapoenen_activiteiten() {
			$sql_activiteit= "SELECT * FROM Activiteiten WHERE Tak = 'Kapoenen'";
			$query_activiteit = $this->db->query($sql_activiteit);
			if($query_activiteit->num_rows() > 0) {
				foreach ($query_activiteit->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		function Welpen_activiteiten() {
		
		}

		function Jonggivers_activiteiten() {
			
		}

		function Givers_activiteiten() {
		
		}

		function Jins_activiteiten() {
			
		}

	}