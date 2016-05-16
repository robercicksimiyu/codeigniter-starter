<?php

/**
 * Created by PhpStorm.
 * User: robert
 * Date: 5/7/16
 * Time: 3:13 PM
 */
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->template->frontend('frontend/home');
    }

}