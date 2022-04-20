<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jwt {
    public function generate_jwt_token($cid)
    {
        $token = array(
            'u' => $cid,
            'a' => 'DG',
            't' => date('Y-m-d H:i:s')
        );
        return base64_encode(json_encode($token));
    }
}


