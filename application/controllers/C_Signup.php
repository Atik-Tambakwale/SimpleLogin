<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Signup extends CI_Controller {
    public function index()
    {
        $this->load->view("V_Registration");
    }

    //user registration
    public function user_Registration()
    {
        $response=[];
        $username=$this->input->post("username");
        $email=$this->input->post("email");
        $password=$this->input->post("passwd");
        $check_email_existed=$this->db->where("email",$email)->get("user_tbl");
        if ($check_email_existed->num_rows() ==0){
            $this->db->insert("user_tbl",array("username"=>$username,"email"=>$email,"initial_password"=>$password,"password"=>md5($password)));
            if ($this->db->affected_rows()) {
                $response["status"]=200;
                $response["msg"]="User is Registered Successfully";
            }else{
                $response["status"]=201;
                $response["msg"]="Unable to Registered User Details";
            }
        } else {
            $response["status"]=201;
            $response["msg"]="This Email Id already Registered";
        }

        echo json_encode($response);
    }
}
?>
