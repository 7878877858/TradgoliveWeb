<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller
{   
    function __construct()
    {
        parent::__construct();
        $this->is_logged_in();
    }

    public function index()
    {
        $this->template->load('master_files/tamplate_master', 'templates/Signin_view');  
    }

    function is_logged_in()
    { 
         
          if ($this->session->userdata('mobile_no') != "")
          {
          redirect(base_url());
          }
         
    }

    public function Login(){

    	$mydata = file_get_contents("php://input");
    	$json_res = json_decode($mydata);

    	$Mobile = $json_res->Mobile;
    	$Password  = $json_res->Password;
    
    	$query = $this->db->query('SELECT Mobile,Username,Profilepic,user_balance,Login_token FROM tbluser WHERE (mobile = ? or email = ?) and password = ?',array($Mobile,$Mobile,$Password));


    	if($query->num_rows() > 0){
    		$profile_pic = $query->row(0)->Profilepic;
    		if($query->row(0)->Profilepic == ""){

    			$profile_pic = "http://164.52.204.166/uploads/Profilepic/2023.jpg";
    		}

    		 $tmp_array = array(
                           'username'=>$query->row(0)->Username,
                           'profilePic'=>$profile_pic,
                           'user_balance'=>"0",
                           'mobile_no'=>$query->row(0)->Mobile,
                           'token'=>$query->row(0)->Login_token,
                           'redirect'=>''   
                    	);
    		 $this->session->set_userdata($tmp_array);
    		echo json_encode(["status"=>"0","statuscode"=>"TXN","message"=>"User Found","data"=>$tmp_array]);exit;
    	}
    	else{

    		echo json_encode(["status"=>"1","statuscode"=>"ERR","message"=>"User Not Found"]);exit;
    	}

    }
}
