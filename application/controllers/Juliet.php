<?php
/**
 * Created by PhpStorm.
 * User: victo
 * Date: 2018-01-31
 * Time: 2:12 PM
 */

class Juliet extends CI_Controller
{
    function index()
    {
        $record = $this->quotes->get(1);
        header("Content-type: application/json");
        echo json_encode($record);
    }
}