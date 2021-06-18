<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__.("\..\php\classes\businessLogic.php");
set_include_path('C:\xampp\php\PEAR');
class testAlumSite extends TestCase
{
    private $bl;
    public function __construct()
    {
        parent::__construct();
        $_SERVER['SERVER_NAME'] = "";
        $this->bl = new BusinessLogic();
    }

    public function testDatabaseSelect(){
       $this->bl->insertAdminUser('admin','password','Super Admin','jakeers98@icloud.com');
    }
}