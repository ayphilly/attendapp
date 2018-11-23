<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model{

    public function form_validate(){
        $firstname = $this->input->post('firstname');
        $midname = $this->input->post('midname');
        $lastname = $this->input->post('lastname');
        $nuber = $this->input->post('number');
        $mailaddr = $this->input->post('mailaddr');
        $mainaddr = $this->input->post('mainaddr');
        $city = $this->input->post('city');
        $present = 0;
        $ismark = 'no';

        $letter ='abcdghjkkk12345';
        $code = substr($letter,0,8);
        

        $data = array(
            'Firstname' => $this->input->post('firstname'),
            'Middlename' =>$this->input->post('midname'),
            'Lastname' =>$this->input->post('lastname'),
            'Number' =>$this->input->post('number'),
            'E-mail' => $this->input->post('mailaddr'),
            'Address' =>$this->input->post('mainaddr'),
            'City' =>$this->input->post('city'),
            'Position' =>$this->input->post('position'),
            'Gender' =>$this->input->post('gender'),
            'Attendance' => $present,
            'Ismarked' => 'Notmarked'
        );

        $this->db->where('E-mail',$mailaddr);
        $query = $this->db->get_where('my_attend');

        if ($query->num_rows() > 0 ){
            return false;
        }
        else {
            $this->db->insert('my_attend', $data);
            return true;

        }
        
    }
    public function addnewuser(){
        $firstname = $this->input->post('firstname');
        $midname = $this->input->post('midname');
        $lastname = $this->input->post('lastname');
        $nuber = $this->input->post('number');
        $mailaddr = $this->input->post('mailaddr');
        $mainaddr = $this->input->post('mainaddr');
        $city = $this->input->post('city');
        $present = 0;
        $ismark = 'no';

        $letter ='abcdghjkkk12345';
        $code = str_shuffle(substr($letter,0,8));
        

        $data = array(
            'Firstname' => $this->input->post('firstname'),
            'Middlename' =>$this->input->post('midname'),
            'Lastname' =>$this->input->post('lastname'),
            'Number' =>$this->input->post('number'),
            'E-mail' => $this->input->post('mailaddr'),
            'Address' =>$this->input->post('mainaddr'),
            'City' =>$this->input->post('city'),
            'Position' =>$this->input->post('position'),
            'Gender' =>$this->input->post('gender'),
            'Attendance' => $present,
            'Ismarked' => $ismark,
        );

        $this->db->where('E-mail',$mailaddr);
        $query = $this->db->get_where('my_attend');

        if ($query->num_rows() > 0 ){
            return 1;
        }
        else {
            $this->db->insert('my_attend', $data);
            return 0;

        }
        
    }
    public function user_login(){
        $username = strtolower($this->input->post('username'));
        $password = $this->input->post('password');
        
       /* $data = array(
            'Username' => $this->input->post('username'),
            'Password' => $this->input->post('password')
        );*/
        $this->db->where('Username',$username);
        $query = $this->db->get_where('admin');

        if ($query->num_rows() > 0){
            $user_data = $query->row_array();
            $hashed_pass = md5($password);
            if ($user_data['Password'] != $password){
                return 0;
            }
            else{
                return 1;
            }
        }
        else {
            return 2;
        }

    }

    public function absent (){
        $query = $this->db->query("SELECT * FROM my_attend WHERE Attendance = 0");
        if($query->num_rows()>0){
            return $query->result_array();
            return 0;
        }
        else {
            #return false
            return 1;
        }

    }

    public function attend ($id) {
        
        $data = array(
            'Attendance' => 1,
            'Ismarked'=>'yes'
        );
        $this->db->where('id',$id);
        $this->db->update('my_attend',$data);
        if($this->db->affected_rows() > 0){
            return 1;
        }
        else{
            return 0;
        }

    }

    public function data_select() {
        $query = $this->db->get('my_attend');
        if ($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }

    }

    public function refresh (){
        $data = array(
            'Attendance' => 0,
            'Ismarked'=>'no'
        );
        
        $query = $this->db->query("UPDATE my_attend SET Attendance=0, Ismarked='no' WHERE Attendance = 1 and Ismarked = 'yes' ");
        
        if ($query->db->affected_rows > 0){
            return True;
        }
    }
    public function mail() {

        $attend = 0;

        $this->db->where('Attendance',$attend);
        $query  = $this->db->get('my_attend');
        if ($query->num_rows() > 0) {

            $myattend = $query->result_array();

            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'aphilemon.aa@gmail.com',
                'smtp_pass' => 'falcaoradamel',
                'mailtype' => 'text',
                'charset' =>'',
                'wordwrap' => true
            );

            foreach ($myattend as $key){

                $this->load->library('email', $config);
                $this->email->from('aphilemon.aa@gmail.com', 'admin');
                $this->email->to($key['E-mail']);
                $this->email->cc('lahbeestar@gmail.com');
                $this->email->bcc('blancosentit@gmail.com');
                $this->email->subject('Church Message');
                $this->email->message('
                    My fellow memeber of christ we didnt
                    see you in service today, hope nothing
                    hapenned.

                    we hope to hear from you later.
                    peace of the Lord be with you, Amen.

                    Please try and attend the next worship service
                    which comes in two days time.

                    And if you need anything you can contact Church Warden 
                    Mr Tope ~~ 08115861199.

                    We Hope to hear from you soon bro/sis '. $key['Firstname']. ' '. $key['Lastname']

                    
                    );
                $this->email->set_newline("\r\n");

                $result = $this->email->send();
                $this->email->print_debugger();
            }
           
        }else {
            return false ;
        }
        


        
        
        

    }
}