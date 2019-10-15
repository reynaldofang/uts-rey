<?php

namespace App\Repositories;
use app\DaftarKontak;

interface DaftarKontakInterface{
    public function create ($nama,  $telepon,  $email,  $alamat);
    public function all();
    public function delete( $id);
    public function get( $id);   
    public function update( $id,  $data);
}   