<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Session;


class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function edit(Setting $setting){
        $setting = Setting::first();
        return view('admin.setting.edit',compact('setting'));
    }
    

    public function update(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'name'=>'required',
            'copyright'=>'required',
        ]);

        $setting = Setting::first();
        $setting->update($request->all());

        if($request->hasFile('logo')){
            $logo = $request->logo;
            $logoeNewName = Time().".".$logo->getClientOriginalExtension();
            $logo->move('storage/setting/',$logoeNewName);
            $setting->logo = '/storage/setting/'.$logoeNewName;
            $setting->save();
        }
        Session::flash('success','Post has been update successfully');
        return redirect()->back();
    }
}
