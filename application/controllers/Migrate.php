<?php
// class migrate extends CI_Controller {
    // public function index(){
      //  load migration library
        // $this->load->library('migration');

        // if ( ! $this->migration->current()){
            // echo 'Error' . $this->migration->error_string();
        // } else {
            // echo 'Migrations ran successfully!';
        // }   
    // }    
// }

class Migrate extends CI_Controller
{

        public function index()
        {
                $this->load->library('migration');

                if ($this->migration->current() === FALSE)
                {
                        show_error($this->migration->error_string());
                }
        }

}

?>