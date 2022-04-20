
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {
    public function get_user_existed($email,$password)
    {
        $result=$this->db->where("email",$email)->get("user_tbl")->row();
        if (is_object($result)) {
            if (md5($password)==$result->password) {
                $data = [];
                $this->load->library('jwt');
                $token = $this->jwt->generate_jwt_token($result->id);
                $data['_token'] = $token;
                $data['as_id'] = $result->id;
                $data['username'] = $result->username;
                $data['email'] = $result->email;
                $data['row_num']=$result->row_no;
                $data['name']=$result->name;
                $this->session->set_userdata($data);
                $this->load->helper('cookie');
                set_cookie("jwt",$data['_token'],3600);
                return "true";
            } else {
                echo "1";
                return "false";
            }
        } else {
            echo "2";
            return "false";
        }


    }
}
?>
