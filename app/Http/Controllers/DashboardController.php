<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Jenis;
use App\Solusi;
use App\Tips;
use Session;
use Storage;
use File;


class DashboardController extends Controller
{
    public function getIndex(){
        $jenis  = Jenis::all();
        $solusi = Solusi::all();
        $tips   = Tips::all();

       $data = (object) ['jenis'   => count($jenis),
                         'solusi'  => count($solusi),
                         'tips'    => count($tips)];
    	return view("admin.index")->with("data",$data);
    }

    // Method untuk Jenis Tanaman
    // Method GET  -> getIndexJenis, getJenis($id), getTambahJenis($id)
    // Method POST -> postSaveJenis($request)
    // 
    // Route -> /dashboard/jenis/{id_jenis}
    // Method untuk Menampilkan Jenis Tanaman bersadarkan {id_jenis}
    public function getJenis($id){
    	$data = Jenis::where("jenis_id",$id)->orderBy('created_at', 'desc')->get();
    	$jenis_id = $id;
    	return view("admin.tabeljenis")->with("data", $data)->with("jenis_id",$id);
    }

    // Route -> /dashboard/jenis/create
    // Method untuk Menampilkan Form Tambah Jenis Tanaman
    public function getTambahJenis(){
    	return view("admin.tambahjenis");
    }

    // Route -> /dashboard.jenis
    // Method untuk Validasi dan Insert Jenis Tanaman ke Database
    public function postSaveJenis(Request $request){
    	$this->validate($request, array(
    		'jenis_id'	=> 'min:1|max:3',
    		'nama'		=> 'required|max:100',
            'judul' 	=> 'required|max:255',
            'url'  		=> 'required|alpha_dash|min:5|max:200|unique:jenis,url',
            'deskripsi' => 'required',
            'img'       => 'required'
        ));

        $jenis = new Jenis;
        $jenis->jenis_id	= $request->jenis_id;
        $jenis->nama 		= $request->nama;
        $jenis->judul  		= strtoupper($request->judul);
        $jenis->url 		= $request->url;
        $jenis->deskripsi  	= $request->deskripsi;

        $img = Input::file('img');
        if ($img !== null) {
            $filename       = $img->getClientOriginalName();
            // Storage::disk('uploads')->put('filename', $filename);
            Storage::disk('uploads')->put($filename, file_get_contents($img -> getRealPath()));
            
            $jenis->img     = $filename;  
        }

        $jenis->save();

        Session::flash('success','Jenis Tanaman Berhasil di Tambah!');


        return redirect()->route('jenis.show', $jenis->jenis_id);
        
    }

    public function getEditJenis($jenis_id, $id){
        $jenis = Jenis::find($id);
        return view("admin.editjenis")->with("data",$jenis);
    }

    public function putUpdateJenis(Request $request, $jenis_id, $id){
        $jenis = Jenis::find($id);

        if ($request->url == $jenis->url) {     
            $this->validate($request, array(
                    'nama'      => 'required|max:100',
                    'judul'     => 'required|max:255',
                    'deskripsi' => 'required'
            ));
        } else{
            $this->validate($request, array(
                    'nama'      => 'required|max:100',
                    'judul'     => 'required|max:255',
                    'url'       => 'required|alpha_dash|min:5|max:200|unique:jenis,url',
                    'deskripsi' => 'required',
                    'img'       => 'required'
            ));
        }

        $jenis->nama        = $request->nama;
        $jenis->judul       = strtoupper($request->judul);
        $jenis->url         = $request->url;
        $jenis->deskripsi   = $request->deskripsi;
        
        $img = Input::file('img');
        if ($img !== null) {
            $filename       = $img->getClientOriginalName();
            // Storage::disk('uploads')->put('filename', $filename);
            Storage::disk('uploads')->put($filename, file_get_contents($img -> getRealPath()));
            
            $jenis->img     = $filename;  
        }

        $jenis->save();

        Session::flash('success','Jenis Tanaman Berhasil di Edit!');

        return  redirect()->route('jenis.show',$jenis->jenis_id);

    }

    public function deleteJenis($jenis_id,$id) {
        $jenis = Jenis::find($id);

        $jenis->delete();

        Session::flash('success', 'Jenis Tanaman Berhasil di Hapus');

        return  redirect()->route('jenis.show',$jenis->jenis_id);

    }

    // Method untuk Solusi Kerusakan Tanaman
    // Method GET  -> getIndexSolusi, getSolusi($id), getTambahSolusi($id)
    // Method POST -> postSaveSolusi($request)
    // 
    // Route -> /dashboard/solusi/{$id}
    // Method untuk Tampilkan semua Solusi Sesuai dengan solusi_id
    public function getSolusi($id){
        $data = Solusi::where("solusi_id",$id)->orderBy('created_at', 'desc')->get();
        $solusi_id = $id;
        return view("admin.tabelsolusi")->with("data", $data)->with("solusi_id",$id);
    }

    // Route -> /dashboard/solusi/create
    // Method untuk Form Tambah Solusi
    public function getTambahSolusi(){
        return view("admin.tambahsolusi");
    }

    // Route -> /dashboard/solusi
    // Method untuk Validasi dan Insert Solusi ke Database
    public function postSaveSolusi(Request $request){
        $this->validate($request, array(
            'solusi_id' => 'min:1|max:2',
            'judul'     => 'required|max:255',
            'url'       => 'required|alpha_dash|min:5|max:200|unique:solusis,url',
            'shortdesk' => 'required|max:255',
            'deskripsi' => 'required',
            'img'       => 'required'
        ));

        $solusi = new Solusi;

        $solusi->solusi_id   = $request->solusi_id;
        $solusi->judul       = $request->judul;
        $solusi->url         = $request->url;
        $solusi->shortdesk   = $request->shortdesk;
        $solusi->deskripsi   = $request->deskripsi;

        $img = Input::file('img');
        if ($img !== null) {
            $imgName        = $img->getClientOriginalName();
            $solusi->img     = $imgName;  
        }

        $solusi->save();

        Session::flash('success','Solusi Berhasil di Tambah!');


        return redirect()->route('solusi.show', $solusi->solusi_id);
        
    }

    public function getEditSolusi($solusi_id, $id){
        $solusi = Solusi::where("solusi_id",$solusi_id)->where("id",$id)->first();
        return view("admin.editsolusi")->with("data",$solusi);
    }

    public function putUpdateSolusi(Request $request, $solusi_id, $id){
        $solusi = Solusi::find($id);

        if ($request->url == $solusi->url) {     
            $this->validate($request, array(
                    'judul'     => 'required|max:255',
                    'shortdesk' => 'required',
                    'deskripsi' => 'required'
            ));
        } else{
            $this->validate($request, array(
                    'judul'     => 'required|max:255',
                    'url'       => 'required|alpha_dash|min:5|max:255|unique:solusis,url',
                    'shortdesk' => 'required',
                    'deskripsi' => 'required',
                    'img'     => 'required'
            ));
        }

        $solusi->judul     = $request->judul;
        $solusi->url       = $request->url;
        $solusi->shortdesk = $request->shortdesk; 
        $solusi->deskripsi = $request->deskripsi; 

        $img = Input::file('img');
        if ($img !== null) {
            $imgName        = $img->getClientOriginalName();
            $solusi->img     = $imgName;  
        }

        $solusi->save();

        Session::flash('success','Solusi Berhasil di Edit!');

        return  redirect()->route('solusi.show',$solusi->solusi_id);

    }

    public function deleteSolusi($solusi_id,$id) {
        $solusi = Solusi::find($id);

        $solusi->delete();

        Session::flash('success', 'Solusi Berhasil di Hapus');

        return  redirect()->route('solusi.show',$solusi->solusi_id);

    }

    //Method untuk Cara dan Tips Menanam
    // Method GET -> getIndex(), getTambahTips(), getTips($id)
    // Method POST -> postSaveTips()
    // 
    // Route -> /dashboard/tips
    // Method untuk Menampilkan Tips di Dashboard
    public function getIndexTips(){
        $data = Tips::orderBy("created_at","desc")->get();
        return view("admin.tabeltips")->with("data",$data);;
    }

    // Route -> /dashboard/tips/create
    // Method untuk Menampilkan Form Tambah Tips
    public function getTambahTips(){
        return view("admin.tambahtips");
    }

    // Route -> /dashboard/tips
    // Method untuk Validasi dan Insert Tips ke Database
    public function postSaveTips(Request $request){
        $this->validate($request, array(
                'judul'     => 'required|max:255',
                'url'       => 'required|alpha_dash|min:5|max:255|unique:tips,url',
                'deskripsi' => 'required',
                'img'     => 'required'
        ));

        $tips = new Tips;

        $tips->judul     = $request->judul;
        $tips->url       = $request->url;
        $tips->deskripsi = $request->deskripsi; 

        $img = Input::file('img');
        if ($img !== null) {
            $imgName        = $img->getClientOriginalName();
            $tips->img     = $imgName;  
        }

        $tips->save();

        Session::flash('sukses','Tips Berhasil di Tambah!');

        return  redirect()->route('tips.show');
    }

    public function getEditTips($id){
        $data = Tips::find($id);
        return view("admin.edittips")->with("data", $data);
    }

    public function putUpdateTips(Request $request, $id){
        $tips = Tips::find($id);

        if ($request->url == $tips->url) {     
            $this->validate($request, array(
                    'judul'     => 'required|max:255',
                    'deskripsi' => 'required'
            ));
        } else{
            $this->validate($request, array(
                    'judul'     => 'required|max:255',
                    'url'       => 'required|alpha_dash|min:5|max:255|unique:tips,url',
                    'deskripsi' => 'required',
                    'img'     => 'required'
            ));
        }

        $tips->judul     = $request->judul;
        $tips->url       = $request->url;
        $tips->deskripsi = $request->deskripsi; 

        $img = Input::file('img');
        if ($img !== null) {
            $imgName        = $img->getClientOriginalName();
            $tips->img     = $imgName;  
        }

        $tips->save();

        Session::flash('sukses','Tips Berhasil di Edit!');

        return  redirect()->route('tips.show');
    }

    public function deleteTips($id){
        $tips = Tips::find($id);

        $tips->delete();

        Session::flash('success', 'Tips Berhasil diHapus');

        return redirect()->route('tips.show');
    }

}
