<?php
session_start();
if(isset($_SESSION['adminLogin'])){
    echo $_SESSION['adminLogin'];
}