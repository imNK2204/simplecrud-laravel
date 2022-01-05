<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    function addproduct(){
        return view('addproduct');
    }

    function main(){
        $data = DB::table('products')->get();
        return view('welcome', compact('data'));
    }

    function products(){
        $data = DB::table('products')->get();
        return view('welcome', compact('data'));
    }

    // add to list
    function createproduct(Request $req){
        DB::table('products')->insert([
            'pname'=>$req->pname,
            'pdesc'=>$req->pdesc,
            'qty'=>$req->pqty
        ]);
        return redirect('products');
    }

    //edit
    function edit($id, Request $req){
        $res = DB::table('products')->where('pid', $id)->first();
        return view('editproduct', compact('res'));
    }

    function editproduct(Request $req){
        DB::table('products')->where('pid', $req->hpid)
                             ->update(['pname'=>$req->pname, 'pdesc'=>$req->pdesc, 'qty'=>$req->pqty]);
        return redirect('products');
    }

    function delete($id){
        DB::table('products')->where('pid', $id)
                             ->delete();
        return redirect('products');
    }
}
