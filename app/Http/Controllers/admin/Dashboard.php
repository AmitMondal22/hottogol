<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function admin_view(Request $r){

        if ($r->isMethod('post')) {

            $data=Menu::create([
                "name"=>$r->name,
                "icon"=>$r->icon,
                "ststus"=>'A',
                "created_by"=>1,
                "updated_by"=>1
            ]);
            // return redirect()->route('emailvaladition', [$data->school_user_id,$encemail]);
            return redirect()->route('menubar');
        }else{
        return view('admin.example.test');
        }
    }

    public function dashboard(){
        return view('admin.example.test');
    }
}
