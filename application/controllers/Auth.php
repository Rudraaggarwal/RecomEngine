<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function index()
    {
        $this->load->view('Auth/login');
    }

    public function register()
    {
        $this->load->view('Auth/register');
    }

    public function registration_form()
    {
        $this->auth_model->register_user();
    }

    public function login_form()
    {
        $this->auth_model->login_user();
    }

    public function main()
    {
        $this->load->view('Auth/index');
    }


    public function logout()
    {
        $this->auth_model->logout();
    }



    public function profile()
    {
        // Access the session data

        $name = $this->session->userdata('name');
        $email = $this->session->userdata('email');

        // Pass the user data to the view
        $data['name'] = $name;
        $data['email'] = $email;

        // Load the view file and pass the data
        $this->load->view('Auth/user_view', $data);
    }

    public function check_current_password($current_password)
    {
        $session_password = $this->session->userdata('password');
    
        if ($current_password !== $session_password) {
            $this->form_validation->set_message('check_current_password', 'The {field} does not match the current password.');
            return FALSE;
        }
    
        return TRUE;
    }
    
    public function changePassword()
    {

        $this->load->library('form_validation');


        $this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[6]');
        $this->form_validation->set_rules('con_password', 'Confirm Password', 'required|matches[new_password]');
        $this->form_validation->set_message('min_length', 'The %s field must be at least 6 characters long.');
        $this->form_validation->set_message('matches', 'The %s field does not match the Password field.');
        $this->form_validation->set_rules('current_password', 'Current Password', 'required');
        $this->form_validation->set_rules('new_password', 'New Password', 'required|differs[current_password]');
        $this->form_validation->set_message('differs', 'The %s field must be different from the Current Password .');
        $this->form_validation->set_rules('current_password', 'Current Password', 'required|callback_check_current_password');




        $curr_password = $this->session->userdata('password');
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Auth/change_password_view');
        } else {

            $newPassword = $this->input->post('new_password');
            $current_password = $this->session->userdata('password');
            if ($newPassword == $current_password) {



                redirect('Auth/changePassword');
            }

            $email = $this->session->userdata('email');                                                                                                                                                                                                                                                                                                                                                                                                
            $this->db->where('email', $email);
            $this->db->update('users', ['password' => $newPassword]);


            $this->session->set_userdata('password', $newPassword);
            $data['success_message'] = 'Password changed successfully.';
            $this->load->view('Auth/change_password_view', $data);




            //  redirect('Auth/main');
        }
    }
    public function changeName()
    {

        $this->load->view('Auth/change_name_view');
    }

    public function updateName()
    {

        $newName = $this->input->post('name');


        $this->auth_model->updateName($newName);





        // redirect('Auth/change_name_view');
    }
}
