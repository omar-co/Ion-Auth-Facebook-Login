<?php

/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 13/03/2016
 * Time: 18:41
 */
class Facebook extends CI_Controller
{

    /**
     * Facebook constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->library('Facebook_ion_auth');
    }

    public function index()
    {
        if (!$this->ion_auth->logged_in()) {
            $this->facebook_ion_auth->login();
            redirect('facebook');
        } else {
            echo "You´re logged in!";

        }
    }

}