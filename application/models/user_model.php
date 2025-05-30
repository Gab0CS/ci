<?php

    class User_model extends CI_Model {
        
        public function get_users($user_id, $username){

            $this->db->where([

                'id'=>$user_id,
                'username'=>$username

            ]);
            
            // $this->db->where('id', $user_id);
            
            $query = $this->db->get('users');
            
            return $query->result();
        }

        public function create_user($data){
            $this->db->insert('users', $data);
        }

        public function update_user($data, $id){
            
            $this->db->where(['id' => $id]);

            $this->db->update('users', $data);
        }

        public function delete_user($id){

            $this->db->where(['id' => $id]);
            $this->db->delete('users');

        }

    }
?> 