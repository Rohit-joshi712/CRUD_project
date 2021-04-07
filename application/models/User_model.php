<?php
    class User_model extends CI_model{
        
        function create($formArray){
            $this->db->insert("users",$formArray);
        }

        function all(){
            return $users = $this->db->get('users')->result_array();  
        }
        function getUser($userid){
            $this->db->where('userid',$userid);
            return $user = $this->db->get('users')->row_array();
        }

        function updateUser($userid,$formArray){
            $this->db->where('userid',$userid);
            $this->db->update('users',$formArray);
        }
        function deleteUser($userid){
            $this->db->where('userid',$userid);
            $this->db->delete('users');
        }
    }
?>