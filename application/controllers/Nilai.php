<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller 
{
    function __construct(){
        parent::__construct();
        $this->api="http://localhost/restserver1/api/nilai/";
        $this->load->library('Curl.php');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index(){
        $data['nilai']=json_decode($this->curl->simple_get($this->api),true);
        $this->load->view('listnilai',$data);
    }

    function create(){
        if(isset($_POST['submit'])){
            $data=array(
                'NIS' =>$this->input->post('NIS'),
                'Nama' =>$this->input->post('Nama'),
                'Kelas' =>$this->input->post('Kelas'),
                'Ma_Pel' =>$this->input->post('Ma_Pel'),
                'Nilai' =>$this->input->post('Nilai')
            );
            $insert=$this->curl->simple_post($this->api. '/add',$data,array(CURLOPT_BUFFERSIZE=>10));
            redirect('nilai');
        }
        else{
            $this->load->view('createnilai'); 

        }
    }

    function edit(){
        if(isset($_POST['submit'])){
            $NIS=$this->input->post('NIS');
            $data=array(
                'Nama' =>$this->input->post('Nama'),
                'Kelas' =>$this->input->post('Kelas'),
                'Ma_Pel' =>$this->input->post('Ma_Pel'),
                'Nilai' =>$this->input->post('Nilai')
            );
            $update=$this->curl->simple_put($this->api.'/update/'.$NIS,$data,array(CURLOPT_BUFFERSIZE=>10));
            redirect('nilai');
        }
        else{
            $NIS=$this->uri->segment(3);
            $data['nilai']=json_decode($this->curl->simple_get($this->api.'/NIS/'.$NIS),true);
            $this->load->view('editnilai',$data);
        }
    }
   
    function delete($NIS){
        if(empty($NIS)){
            redirect('nilai');
        }
        else{
            $NIS=$this->uri->segment(3);
            $data['niali']=json_decode($this->curl->simple_delete($this->api.'/delete/'.$NIS),true);
            redirect('nilai');
        }
    }
    
}
