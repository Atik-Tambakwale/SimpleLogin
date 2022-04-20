<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model("M_Login");
    }
    public function index()
    {
        $this->load->view("V_Login");
    }

    //user authentication
    public function Authentication()
    {
        $response=[];
        $email=$this->input->post("email");
        $password=$this->input->post("password");
        if ($this->M_Login->get_user_existed($email,$password)=="true") {
            $response["status"]=200;
            $response["msg"]="You Have Login Successfully";
        } else {
            $response["status"]=201;
            $response["msg"]="Plz Check Your Email ID And Password";
        }
        echo json_encode($response);
    }

    //user sign out
    public function signout()
    {
      $this->session->sess_destroy();
      redirect(base_url());
      $this->load->helper('cookie');
      delete_cookie("jwt");
      $response = [];
      $response['status'] =200;
      $response['msg'] ="You have Signed out Successfully";
      echo json_encode($response);
    }

}
?>
