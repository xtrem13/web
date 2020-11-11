<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Management;
use App\Models\ZavodsGallery;
use App\Models\ManufGallery;

class FrontendController extends Controller
{
	private function view($file, $l='oz', $data=[]){
		$data['body']='frontend.'.$file;
		$data['l']=$l;
		return view('frontend.index', $data);
	}
	public function default(){
		return redirect()->route('home', 'oz');
	}
    public function home(Request $req){
    	$data['l']=$req->l;
    	return view('frontend.home', $data);
    }
    public function about(Request $req){
        $data['managers']=Management::all();
    	return $this->view('about', $req->l, $data);
    }
    public function zavod(Request $req){
        $data['zavod']=Store::$zavods[$req->id]??false;
        if($data['zavod'])
            return $this->view('zavods.one', $req->l, $data);
        abort(404);
    }
    public function zavgallery(Request $req){
        $data['zavod']=Store::$zavods[$req->id];
        $data['images']=ZavodsGallery::all();
        return $this->view('zavods.gallery', $req->l, $data);
    }
    public function history(Request $req){
        $data['history']=Store::$history[$req->id]??false;
        if($data['history'])
            return $this->view('history.one', $req->l, $data);
        abort(404);
    }
    public function historical_gallery(Request $req){
        return $this->view('history.historical_gallery', $req->l);
    }
    public function manuf(Request $req){
    	return $this->view('manufactures.list', $req->l);
    }
    public function modern(Request $req){
    	return $this->view('modern', $req->l);
    }
    public function structure(Request $req){
    	return $this->view('structure', $req->l);
    }
    public function tender(Request $req){
    	return $this->view('tender', $req->l);
    }
    public function komitets(Request $req){
    	return $this->view('komitets', $req->l);
    }
    public function price(Request $req){
    	return $this->view('price', $req->l);
    }
    public function onemanuf(Request $req){
        $data['manufacture']=Store::$manufactures[$req->id]??false;
        if($data['manufacture'])
            return $this->view('manufactures.one', $req->l, $data);
        abort(404);        
    }
    public function manufgallery(Request $req){
        $data['manuf']=Store::$manufactures[$req->id];
        $data['images']=ManufGallery::all();
        return $this->view('manufactures.gallery', $req->l, $data);
    }
}
