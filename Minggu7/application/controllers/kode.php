<?php 
class Kode extends CI_Controller {
    public function hello($var) {
        if(isset($var)){
            switch(strtolower($var)){
                case "php":
                    $this->load->view('phpview');
                    break;
                case 'python':
                    $this->load->view('python');
                    break;
                case "cpp":
                    $this->load->view('cppview');
                    break;
                case 'java':
                    $this->load->view('java');
                    break;
                default:
                    echo "input URL salah";
              }
    } else {
      echo 'Input URL salah';
    }
  }
}