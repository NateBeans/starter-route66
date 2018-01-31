<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charlie extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Able page for our app
     */
    public function brown()
    {
        $this->show(3);
    }

}