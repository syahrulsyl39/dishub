<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Survei;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SurveiController extends Controller
{
   

    public function index()
    {
        $survei = Survei::all();
        if ($survei) {
            return response()->json([
                'succes'=>true,
                'message'=>'data survei berhasil di tampilkan',
                'data'=>$survei
            ], 200);
        }else {
            return response()->json([
                'succes'=>false,
                'message'=>'data survei tidak bisa di tampilkan'
            ], 401);
        }
    }

   

    public function delete($id)
    {
        $survei = Survei::where('id', $id)->first();
        $survei->delete();
        if ($survei) {
            return response()->json([
                'succes'=>true,
                'message'=>'data survei berhasil di delete',
                'data'=>$survei
            ], 200);
        }else {
            return response()->json([
                'succes'=>false,
                'message'=>'data survei tidak bisa di delete'
            ], 401);
        }
    }
}
