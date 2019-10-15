<?php

namespace App\Http\Controllers;

use App\DaftarKontak as DaftarKontakModel;
use App\Repositories\DaftarKontakInterface;
use App\Repositories\DaftarKontakRepository;

use Illuminate\Http\Request;

class DaftarKontakController extends Controller
{
    private $daftarkontakRepo;

    public function __construct(DaftarKontakRepository $repo)
    {
        $this->daftarkontakRepo = $repo;
    }

    public function index()
    {
        $daftarkontaks = DaftarKontakModel::all();
        return view('daftarkontak.index', ['daftarkontaks' => $daftarkontaks]);
    }

    public function new_form()
    {
        return view('daftarkontak.new');
    }

    public function save(Request $request)
    {
        $daftarkontak = new DaftarKontakModel;
        $daftarkontak->nama = $request->nama;
        $daftarkontak->telepon = $request->telepon;
        $daftarkontak->email = $request->email;
        $daftarkontak->alamat = $request->alamat;
        $daftarkontak->save();
        return redirect(route('daftarkontakIndex'));
    }

    public function delete( $id)
    {
        $this->daftarkontakRepo->delete($id);
        return redirect(route('daftarkontakIndex'));
    }

    public function detail( $id){
        $daftarkontak = $this->daftarkontakRepo->get($id);
        if ($daftarkontak == null){
            abort(404);
        }
        return view('daftarkontak.detail',
                     ['daftarkontak'=>$daftarkontak]);

    }

    public function edit( $id){
        $daftarkontak = DaftarKontakModel::findOrFail($id);
        return view('daftarkontak.edit',
                    ['daftarkontak'=>$daftarkontak]);
    }

    public function update(Request $request){
        $newdaftarkontak = new DaftarKontakModel;
        $newdaftarkontak->nama = $request->input('nama');
        $newdaftarkontak->telepon = $request->input('telepon');
        $newdaftarkontak->email = $request->input('email');
        $newdaftarkontak->alamat = $request->input('alamat');
        $this->daftarkontakRepo->update($request->id,$newdaftarkontak);
        return redirect(route('daftarkontakIndex'));
    }

    public function search(Request $request)
    {
        $daftarkontaks = DaftarKontakModel::when($request->keyword, function ($query) use ($request) {
        $query->where('nama', 'like', "%".$request->keyword."%");
        })->get();
        return view('daftarkontak.index', ['daftarkontaks' => $daftarkontaks]);
    }



}
