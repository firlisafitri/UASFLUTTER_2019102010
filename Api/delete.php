<?php

    $connection = new mysqli("localhost", "root", "", "dbkaryawan");

    $id = $_POST['id'];

    $result = mysqli_query($connection, "delete from employees where id=".$id);

    if($result){
        echo json_encode([
            'message' => 'Data delete successfully'
        ]);
    }else{
        echo json_encode([
            'message' => 'Data Failed to delete'
        ]);
    }