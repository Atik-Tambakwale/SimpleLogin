<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {
    public function index()
    {
        $this->load->view("V_Dashboard");
    }

    //update user details
    public function user_update()
    {
        $response=[];
        $user_id=$this->input->get("id");
        $row_num=$this->input->get("row_no");
        $name=$this->input->get("name");
        $this->db->where("id",$user_id)->get("user_tbl");
        $this->db->update("user_tbl",array("row_no"=>$row_num,"name"=>$name));
        $this->session->sess_destroy();
        $this->load->helper('cookie');
        delete_cookie("jwt");
        if ($this->db->affected_rows()) {
            
            $response["status"]=200;
            $response["msg"]="User Update Name and Row Number Successfully";
        } else {
            $response["status"]=201;
            $response["msg"]="Unable to Edit User Name and Row Number Failed!";
        }
        echo json_encode($response);
    }
}
