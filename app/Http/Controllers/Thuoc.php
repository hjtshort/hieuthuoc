<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ThuocRequest;
use App\Http\Requests\LoginRequest;
use Auth;
use App\models\thuocs;
use Carbon;
class Thuoc extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->search && $request->search!=''){
            $data=thuocs::where('tenthuoc','like','%'.$request->search.'%')
            ->orWhere('soke',$request->search)->orWhere('ngayhethan','like','%'.$request->search.'%')
            ->orWhere('created_at','like','%'.$request->search.'%')->paginate(10);
            return view('modules.dashboard', compact('data'));
        }
        else{
            $data=thuocs::paginate(10);
            return view('modules.dashboard', compact('data'));
        }
        
    }

    public function glogin()
    {
        return view('login');
    }
    public function plogin(LoginRequest $request)
    {
        $auth= array('email'=>$request->email,'password'=>$request->pass);
        if(Auth::attempt($auth,false))
			{
				return redirect()->route('list');			}
		else
			{
				return redirect()->back()->with(['errormessage'=>'Email hoặc password không đúng!']);
			}
    }
    public function ginsert()
    {
        return view('modules.themthuoc');
    }
    public function pinsert(ThuocRequest $request)
    {
        thuocs::insert([
            'tenthuoc'=>$request->tenthuoc,
            'soluong'=>$request->soluong,
            'giasi'=>$request->giasi,
            'giale'=>$request->giale,
            'ngayhethan'=>$request->ngayhethan,
            'soke'=>$request->soke,
            'created_at'=>Carbon::now()
        ]);
        return redirect()->route('list')->with(['message'=>'Thêm thành công!']);
    }

    public function gupdate($id)
    {
        $info=thuocs::find($id);
        if($info)
        {
            return view('modules.edit',compact('info'));
        }
        else
            return redirect()->route('list');
    }
    public function pupdate(ThuocRequest $request,$id)
    {
        thuocs::find($id)->update($request->all());
        return redirect()->route('list');
    }

    public function remove(Request $request){
        if($request->ajax())
        {
            try
            {
                thuocs::find($request->id)->delete();
                return 'ok';
            }
            catch(\Illuminate\Database\QueryException $ex){ 
               return 'error';
            } 
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
}
