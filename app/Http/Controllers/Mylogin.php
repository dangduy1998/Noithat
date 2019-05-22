<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
class Mylogin extends Controller
{
    public function getHello(){
    	echo "Get hello";
    }
    public function Getroute($ten){
       echo "Ten truyen ".$ten.'<br>';
       return redirect()->route('MyRoute');
    }

    public function GetData(Request $req){
    	return $req->url();
    }
    public function postForm(Request $req){
    	echo $req->HoTen;
    }
    public function setCookie(){
    	$response = new Response;
    	$response -> withCookie('hoten','Dang Duy', 1);
    	return $response;
    }
    public function getCookie(Request $request){
    	return $request->cookie('hoten');
    }
    public function postFile(Request $req){
    	if($req->hasFile('Myfile')){
    		$file = $request->file('Myfile');
    		$file->move('img','anh1.png');
    	}else {
    		echo "ko co file";
    	}
    }
}
