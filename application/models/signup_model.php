<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: lokeshkumarjr
 * Date: 04/08/17
 * Time: 1:47 PM
 */

class Signup_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $data
     * @return bool|void
     */
    public function add($data)
    {
        if ($this->db->insert('signups', $data)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $data
     * @return bool
     */
    public function edit($data)
    {
        $this->db->where('signup_email', $data['signup_email']);
        if($this->db->update('signups', $data)){
            return true;
        }
        else{
            return false;
        }
    }

    public function delete($data)
    {
        $this->db->where('signup_email', $data['signup_email']);
        if($this->db->delete('signups', $data)) {
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * @param $email
     * @return bool
     */
    public function get_settings($email){
        $this->db->where('signup_email', $email);
        $query = $this->db->get('signups');
        if($query){
            return true;
        }else{
            return false;
        }
    }


}
