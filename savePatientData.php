<?php
    $pass = $_POST['password'];
    $id = $_POST['id'];
    $pname = $_POST['name'];
    $ad = $_POST['address'];
    $phnmbr = $_POST['phone'];
    $sym = $_POST['symptom'];
    $pre = $_POST['prescription'];
    
    echo "<h3>Your password:  ".$pass."  ID:  ".$id."  Hello-  ".$pname. "   address:  " .$ad. "  phone number:  " .$phnmbr. "   symptom are:   " .$sym. "   prescription:   " .$pre.   "</h3>";
?>