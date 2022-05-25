<?php 

    $connection = new mysqli("localhost","root","","dbkaryawan");
    $data       = mysqli_query($connection, "select * from employees where id=".$_GET['id']);
    $data       = mysqli_fetch_array($data, MYSQLI_ASSOC);

    echo json_encode($data);