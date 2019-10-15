<?php
    namespace App\Repositories;

    use App\DaftarKontak;

    class DaftarKontakRepository implements DaftarKontakInterface{

        public function create( $nama,  $telepon,  $email,  $alamat){
            $newdaftarkontak = new daftarkontak;
            $newdaftarkontak->nama = $nama;
            $newdaftarkontak->telepon = $telepon;
            $newdaftarkontak->email = $email;
            $newdaftarkontak->alamat = $alamat;
            $newdaftarkontak->save();
        }
        public function all(){
            return daftarkontak::all();
        }
        public function get( $id){
            return daftarkontak::findOrFail($id);
        }

        public function update( $id,  $data){
            daftarkontak::findOrFail($id)->update(['nama'=>$data->nama,'telepon'=>$data->telepon,'email'=>$data->email,'alamat'=>$data->alamat]);
        }
         public function delete( $id){
             $newdaftarkontak = daftarkontak::find($id);
             $newdaftarkontak->delete();
        }
    }
?>