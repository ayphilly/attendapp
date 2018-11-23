<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    error_reporting(E_ALL);
    class Home extends CI_Controller {
        public function __construct()
        {
            parent:: __construct();
            $this->load->helper("url");
                 
        }

        public function index(){

            $data['css'] = $this->load->view('public/top', '', True);
            $data['footer'] = $this->load->view('public/footer','', True);        
            $this->load->view('index.php', $data);
            

        }
        public function admin(){
            $data['css'] = $this->load->view('public/top', '', True);
            $data['js'] = $this->load->view('public/js','', True);

            $this->load->model('Home_model');
            $data['result'] = $this->Home_model->user_login();            

            $this->load->view('admin.php',$data);
        }

        public function login (){
            $data['css'] = $this->load->view('public/top', '', True);
            $data['footer'] = $this->load->view('public/footer','', True);  
            //$data['css'] = $this->load->view('/top/top.php');            

            $this->load->view('login.php', $data);
            
        }

        public function enter_admin(){
            $this->load->library('form_validation');            
            $this->form_validation->set_rules("username", 'username', 'required');
            $this->form_validation->set_rules("password", 'password', 'required');

            $this->load->model('Home_model');
            $result = $this->Home_model->user_login(); 
            echo $result;               
            #$this->mylist($result);               

            
        }


        public function mylist (){
            $data['css'] = $this->load->view('public/top', '', True);
            $data['footer'] = $this->load->view('public/footer','', True);
            $this->load->model('Home_model');
            $data['row'] =  $this->Home_model->data_select();

            $this->load->view('list.php', $data);

        }
        public function Adduser(){
            $data['css'] = $this->load->view('public/top', '', True);
            $data['js'] = $this->load->view('public/js','', True);

            $this->load->view('adduser.php',$data);
        }

        public function adduserviaadmin(){
            $this->load->library('form_validation');

            $this->form_validation->set_rules("firstname", 'firstname', 'required');
            $this->form_validation->set_rules("midname", 'middlename', 'required');
            $this->form_validation->set_rules("lastname", 'lastname', 'required');
            $this->form_validation->set_rules("number", 'number', 'required');
            $this->form_validation->set_rules("mailaddr", 'mailaddr', 'required ');
            $this->form_validation->set_rules("mainaddr", 'Address', 'required');
            $this->form_validation->set_rules("city", 'city', 'required ');
            $this->form_validation->set_rules("position", 'Position', 'required');
            $this->form_validation->set_rules("gender", 'gender', 'required');

            if($this->form_validation->run()){
                $this->load->model('Home_model');
                $result = $this->Home_model->addnewuser();
                echo $result;
                //redirect($this->inserted());
            }
            else{
                $error = 2;
                echo $error;
            }
        }

        public function form_val(){
            $this->load->library('form_validation');

            $this->form_validation->set_rules("firstname", 'firstname', 'required');
            $this->form_validation->set_rules("midname", 'middlename', 'required');
            $this->form_validation->set_rules("lastname", 'lastname', 'required');
            $this->form_validation->set_rules("number", 'number', 'required');
            $this->form_validation->set_rules("mailaddr", 'mailaddr', 'required ');
            $this->form_validation->set_rules("mainaddr", 'Address', 'required');
            $this->form_validation->set_rules("city", 'city', 'required ');
            $this->form_validation->set_rules("position", 'Position', 'required');
            $this->form_validation->set_rules("gender", 'gender', 'required');

            if($this->form_validation->run()){
                $this->load->model('Home_model');
                $this->Home_model->form_validate();
                redirect($this->inserted());
            }

            else{
                $this->index();
            }

        }
        public function data_edit($id){

         $this->load->model('Home_model');
         $result = $this->Home_model->attend($id); 
         //echo $result;
         if ($result == 1){            
            $this->mylist();
            return $result;
                         
         } 
         else{
            $this->mylist();
            return $result;
         }
        }

        public function absent(){
            $this->load->model('Home_model');
            $data['result'] = $this->Home_model->absent();
            if($data){
                
                $data['css'] = $this->load->view('public/top', '', True);
                $data['footer'] = $this->load->view('public/footer','', True);
                $this->load->view('absent.php', $data);

            } 
             
        }
        public function refresh(){
            $this->load->model('Home_model');
            $this->Home_model->refresh();
            $this->mylist();
            
        }

        public function inserted(){
            $this->index();
        }


        public function error(){
            $this->login();
        }

        function mail() {
            $this->load->model('Home_model');
            $this->Home_model->mail();
            $this->mylist();

        }
        function mmm(){
            $this->load->model('Home_model');
            $data = $this->Home_model->send_mail();
            echo $data;

        }
    }