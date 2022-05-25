<?php

    $connection = new mysqli("localhost", "root", "", "dbkaryawan");
    $name      = $_POST['name']; 
    $address   = $_POST['address'];
    $salary    = $_POST['salary'];
    $id        = $_POST['id'];
        
    $result = mysqli_query($connection, "update employees set name='$name', address='$address', salary='$salary' where id='$id'");
        
    if($result){
        echo json_encode([
            'message' => 'Data edit successfully'
        ]);
    }else{
        echo json_encode([
            'message' => 'Data Failed to update'
        ]);
    }