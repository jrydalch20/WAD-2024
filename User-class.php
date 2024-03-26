<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

class User {
    
    public $username;
    public $roles = array();
    
    function __construct($username){
        global $conn;
                
        $this->username = $username;
        
        // Check if the username exists in the employee table
        $query_employee = "SELECT * FROM employee WHERE username='$username'";
        $result_employee = $conn->query($query_employee);
        
        if ($result_employee->num_rows > 0) {
            // User is found in the employee table
            $this->roles[] = 'Employee';
        }
        
        // Check if the username exists in the renter table
        $query_renter = "SELECT * FROM renter WHERE username='$username'";
        $result_renter = $conn->query($query_renter);
        
        if ($result_renter->num_rows > 0) {
            // User is found in the renter table
            $this->roles[] = 'Renter';
        }
        
        // Debug: Output roles
        //echo "<pre>";
        //echo "Roles for user $username: ";
        //print_r($this->roles);
        //echo "</pre>";
    }

    function getRoles(){
        return $this->roles;
    }

}
