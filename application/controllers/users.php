<?php

class Users extends CI_Controller {

    public function show($user_id){

        $data['results'] = $this->user_model->get_users($user_id, "gabo");


        $this->load->view('user_view', $data);

    }

    public function insert(){

        $username = 'peter';
        $password = 'secret';

        $this->user_model->create_user([
            'username' => $username,
            'password' => $password
        ]);
    }

    public function update(){

        $id = 3;

        $username = 'william';
        $password = 'secret123';

        $this->user_model->update_user([
            
            'username' => $username,
            'password' => $password
        
        ], $id);
    }

    public function delete(){
        $id = 3;
        $this->user_model->delete_user($id);
    }
}

?>