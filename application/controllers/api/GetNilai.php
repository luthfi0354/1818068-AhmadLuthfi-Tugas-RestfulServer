<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH. "libraries/Format.php";
require APPPATH. "libraries/RestController.php";

use chriskacerguis\RestServer\RestController;

class GetNilai extends RestController{

    public function __construct(){
        parent::__construct();
        $this->load->model('ModelNilai');
    }

    public function index_get(){
        $nli = new ModelNilai;
        $resultnli= $nli->get_nilai();
        $this->response($resultnli,200);
    }

    public function NilaiById_get($NIS){ 
        $nli = new ModelNilai;
        $resultnli= $nli->get_nilai_byid($NIS);
        $this->response($resultnli,200);
    }

    public function AddNilai_post(){
        $nli = new ModelNilai;
        $data=[
            'NIS' => $this->input->post('NIS'),
            'Nama' => $this->input->post('Nama'),
            'Kelas' => $this->input->post('Kelas'),
            'Ma_Pel' => $this->input->post('Ma_Pel'),
            'Nilai' => $this->input->post('Nilai'),
        ];
        $addnli= $nli->post_nilai($data);
        if($addnli > 0){
            $this->response(
                [
                    'status' => true,
                    'pesan' => 'insert berhasil',
                ], RestController::HTTP_OK
            );
        }
        else{
            $this->response(
                [
                    'status' => false,
                    'pesan' => 'insert gagal'
                ], RestController::HTTP_BAD_REQUEST
            );

        }
    }

    public function UpdateNilai_put($NIS){
        $nli= new ModelNilai;
        $data=[
            'Nama' => $this->put('Nama'),
            'Kelas' => $this->put('Kelas'),
            'Ma_Pel' => $this->put('Ma_Pel'),
            'Nilai' => $this->put('Nilai'),
        ];
        $putnli= $nli->put_nilai($NIS, $data);
        if($putnli > 0){
            $this->response(
                [
                    'status' => true,
                    'pesan' => 'update berhasil',
                ], RestController::HTTP_OK
            );
        }
        else{
            $this->response(
                [
                    'status' => false,
                    'pesan' => 'update gagal'
                ], RestController::HTTP_BAD_REQUEST
            );

        }
    }

    public function DeleteNilai_delete($NIS){
        $nli= new ModelNilai;
        $delnli= $nli->del_nilai($NIS);
        if($delnli > 0){
            $this->response(
                [
                    'status' => true,
                    'pesan' => 'delete berhasil',
                ], RestController::HTTP_OK
            );
        }
        else{
            $this->response(
                [
                    'status' => false,
                    'pesan' => 'delete gagal'
                ], RestController::HTTP_BAD_REQUEST
            );

        }
    }
}

?>