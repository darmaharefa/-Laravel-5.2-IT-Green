<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jenis;
use App\Solusi;
use App\Tips;

class PostController extends Controller
{
    public function getIndex(){
        $jenis  = Jenis::orderBy("created_at","desc")->first();
        $solusi = Solusi::orderBy("created_at","desc")->first();
        $tips   = Tips::orderBy("created_at","desc")->first();
        return view("pages.index")->with("jenis", $jenis)->with("solusi",$solusi)->with("tips",$tips);
    }

    public function getJenis($id){
    	$jenis = Jenis::where("jenis_id", $id)->orderBy("created_at", "desc")->get();
    	return view("post.listjenis")->with("data", $jenis)->with("jenis_id",$id);
    }

    public function getDetailJenis($id, $slug){
    	$jenis = Jenis::where("url", $slug)->first();
    	return view("post.detailjenis")->with("data",$jenis);
    }

    public function getSolusi($id){
    	$solusi= Solusi::where("solusi_id", $id)->orderBy("created_at", "desc")->get();
    	return view("post.listsolusi")->with("data", $solusi)->with("solusi_id",$id);
    }

    public function getDetailSolusi($id, $slug){
    	$solusi = Solusi::where("url", $slug)->first();
    	return view("post.detailsolusi")->with("data",$solusi);
    }

    public function getTips(){
        $tips = Tips::orderBy("created_at","desc")->paginate(3);
        return view("post.listtips")->with("data",$tips);
    }

    public function getDetailTips($slug){
        $tips = Tips::where("url",$slug)->first();
        return view("post.detailtips")->with("data",$tips);
    }
}
