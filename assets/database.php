<?php

  function create_database_connection() {
    $mysqli = new mysqli(DB_HOSTNAME, DB_USER, DB_PASSWORD, DB_DATABASE);
    $connect_error = mysqli_connect_errno();
    return array($mysqli, $connect_error);
  }
  
  function close_database_connection($mysqli, $connect_error) {
    if (isset($mysqli) && !$connect_error) {
      $mysqli->close();
    }
  }

  function find_all_tip() {
    list($mysqli, $connect_error) = create_database_connection();
    
    $tip = array();
    
    if (!$connect_error) {
    
      $sql = "SELECT * FROM tip ORDER BY id DESC";
      
      $tip = $mysqli->query($sql);
    } else {
      die('Connect Error: ' . mysqli_connect_error());
    }
  
    close_database_connection($mysqli, $connect_error);
    
    return $tip;
  }
  
  function add_new_tip($yes, $no) {
    list($mysqli, $connect_error) = create_database_connection();
    
    if (!$connect_error) {
      $sql = "INSERT INTO tip (yes, no) value ('$yes', '$no', null)";
      $result = $mysqli->query($sql);
    }
    
    close_database_connection($mysqli, $connect_error);
    
    return $result;
  }
?>
