<?php

class Practice_model extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	function getAllData() {     
	    $query = $this->db->query('SELECT * FROM accounts'); 
	    //$query = $this->db->query('accounts', 10);
		//return $query->result(); 
        //return $query->result();     
		foreach ($query->result() as $row)
		{
		    echo "id: " . $row->id . "<br>";
		    echo "name: " . $row->name . "<br>";
		    echo "email: " . $row->email . "<br>";
		    echo "pass: " . $row->pass . "<br>";
		    echo "date: " . $row->date . "<br>";
		}


        echo "<pre>";

        $row = $query->first_row();

        echo "first_row <br>";
        print_r($row);

        $row = $query->last_row();

        echo "last_row <br>";
        print_r($row);

        $row = $query->next_row();

        echo "next_row <br>";
        print_r($row);


        $row = $query->previous_row();
        echo "previous_row <br>";
        print_r($row);


        echo "</pre>";

        echo "<br>get<br>";
        $query = $this->db->get('accounts');

        foreach ($query->result() as $row)
        {
            echo "id: " . $row->id . "<br>";
            echo "name: " . $row->name . "<br>";
            echo "email: " . $row->email . "<br>";
            echo "pass: " . $row->pass . "<br>";
            echo "date: " . $row->date . "<br>";
        }



        echo "<br> with where conditions <br>";

			
			
			$this->db->select('*');
			$this->db->from('accounts'); 
			$this->db->where('id =',1);
			$query = $this->db->get();
         	
         	 
         	foreach($query->result() as $row) {
				echo "id: " . $row->id . "<br>";
	            echo "name: " . $row->name . "<br>";
	            echo "email: " . $row->email . "<br>";
	            echo "pass: " . $row->pass . "<br>";
	            echo "date: " . $row->date . "<br>";
			}
	 	
        echo "<br> likes <br>";

			
			
			$this->db->select('*');
			$this->db->from('accounts'); 
			$this->db->like('name', 'e', 'both'); 
			$query = $this->db->get();
         	
         	 
         	foreach($query->result() as $row) {
				echo "id: " . $row->id . "<br>";
	            echo "name: " . $row->name . "<br>";
	            echo "email: " . $row->email . "<br>";
	            echo "pass: " . $row->pass . "<br>";
	            echo "date: " . $row->date . "<br>";
			}
			
			
			echo "total affected column " . $query->num_fields();
	 	  
	}  
	
	function login($user, $pass) { 
		return "$user, $pass";
	}
	
}




?>