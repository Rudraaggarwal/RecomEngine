
<?php

class auth_model extends CI_Model
{


    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function register_user()
    {

        $password = $this->input->post('password');
        $con_password = $this->input->post('con_password');
        $email = $this->input->post('email');

        $regex = '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]+$/';
        if (!preg_match($regex, $email)) {
            $this->session->set_flashdata('wrong', 'Please enter correct format  !');
            redirect('Auth/register');
        }

        // Check if the email address is already registered.
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            $this->session->set_flashdata('wrong', 'Email already registered!');
            redirect('Auth/register');
        }



        if ($password != $con_password) {
            $this->session->set_flashdata('wrong', 'The password not equal with confirmation!');
            redirect('Auth/register');
        } else {
            $data = array(
                "name" => $this->input->post('name'),
                "email" => $this->input->post('email'),
                "password" => $password
            );

            $this->session->set_userdata($data);


            $this->db->insert('users', $data);
            $this->session->set_flashdata('suc', 'You are registered please login');
            redirect('Auth/');
        }
    }

    public function login_user()
    {
        $this->load->library('session');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $table = 'users';
        $name_column = 'name';
        $query = $this->db->query("SELECT $name_column FROM $table WHERE email = '$email'");
        $result = $query->row();
        if ($result) {
            $name = $result->$name_column;
        } else {
            $name = null;
        }


        
        $user = $this->db->get_where('users', ['email' => $email])->row_array();
      
        if ($user && ($password==$user['password'])) {
          
          $this->session->set_userdata( $user);
          redirect('Auth/main');
        } else {
        
           $this->session->set_flashdata('wrong', 'Invalid credentials');
          redirect('Auth/');
           }
    }

    public function updateName($newName) {
        
        $userId = $this->session->userdata('name');
        
        // Assuming you have a 'users' table with a 'name' column, update the name
        $this->db->where('name', $userId);
        $this->db->update('users', ['name' => $newName]);
        $this->session->set_userdata(array('name' => $newName));
        $data['success_message'] = 'Name changed successfully.';
        $this->load->view('Auth/change_name_view', $data);
       
    }


    public function logout()
    {
        $this->session->sess_destroy();

        redirect('Auth/');
    }
}

?>