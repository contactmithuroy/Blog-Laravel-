<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function edit(Setting $setting){
        $setting = Setting::first();
        return view('admin.setting.edit',compact('setting'));
    }
}
