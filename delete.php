<?php
include'connct.php';

if(isset($_GET['did'])){
$did = $_GET['DID'];

$sql = "DELETE FROM crud WHER id = $did";

$result = mysqli_query($con,$sql);

if($result){
header('location:display.php');
}else{
    die(mysqli_error($con));
}

}