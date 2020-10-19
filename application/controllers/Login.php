<?php

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
    }

    function index(){

        $data['title'] = 'SI JUET | Login';
        $this->load->view('header',$data);
        $this->load->view('login');
        
     
    }

    function validasi(){
        
        // print_r($_POST);

       $username = $this->input->post('username');
        $password = $this->input->post('password');

        $hasil = $this->Login_model->getuser($username,SHA1($password));

        if ($hasil->num_rows()>0) {
            # code...
             $i = $hasil->row_array();

             $_SESSION['id'] = $i['id'];
             $_SESSION['nama_lengkap'] = $i['nama_lengkap'];
             $_SESSION['username'] = $i['username'];
             $_SESSION['level'] = $i['level'];
             $_SESSION['nip'] = $i['nip'];
                      
            echo 200;
        }
        else{

            echo 600;
        }
       





    }

    function logout(){

        unset($_SESSION['username']);
        unset($_SESSION['level']);
        session_destroy(); 

         redirect('login');


    }

    function ubah(){
           $data['title'] = 'SI JUET | Pengaturan User';
            $this->load->view('header',$data);
            $this->load->view('ubah');
    }


    function update_user(){

        $id = $_POST['id'];
        $username = $_POST['username'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $nip = $_POST['nip'];
        $password =$_POST['password'];

        $this->Login_model->set_user($id,$username,$nama_lengkap,$nip,$password);
         unset($_SESSION['username']);
        unset($_SESSION['level']);
        session_destroy();
        redirect('login');
    }
}