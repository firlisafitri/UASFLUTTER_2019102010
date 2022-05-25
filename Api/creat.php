<?php

	$connection = new mysqli("localhost", "root", "", "dbkaryawan");
    $name      = $_POST['name']; 
    $address   = $_POST['address'];
    $salary    = $_POST['salary'];
    
    $result = mysqli_query($connection, "insert into employees set name='$name', address='$address', salary='$salary'");
    
    if($result){
        echo json_encode([
            'message' => 'Data input successfully'
        ]);
    }else{
        echo json_encode([
            'message' => 'Data Failed to input'
        ]);
    }