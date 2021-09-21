<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihansatu extends CI_Controller {

	public function index(){
		echo "<h1>Contoh Class</h1>";
	}

    //Hanya menggunakan controller
    public function biodatasatu(){
        echo "<h1>Perkenalkan</h1>";
        echo "<br>";
        echo "Nama : Gloria Zai";
    }

    //menggunakan Controller dan view
    public function biodatadua(){

        $this->load->view('view_biodata');

    }

    //menggunakan Controller dan Model
    public function biodatatiga(){
        $this->load->model('model_biodata'); //panggil model
        $bio = $this->model_biodata->biodata();

        echo "<h1>Perkenalkan</h1>";
        echo "<br>";
        echo "Nama : " . $bio;
    }   
    
     //menggunakan Controller Model dan view
     public function biodataempat(){
        $this->load->model('model_biodata'); //model
        $data ['bio'] = $this->model_biodata->biodata();

        $data['title'] = "Form Biodata";

        $this->load->view('view_biodata', $data); //view

    }   
}