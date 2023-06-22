<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Survei;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class SurveiController extends Controller
{
    
    public function index()
    {
        $data_survei = Survei::paginate(10);
        return view('dashboard.survei.index', compact('data_survei'));
    }

    public function create()
    {
        return view('frontend2.survei');
    }

   
    public function delete($id)
    {
        $data_survei = Survei::where('id', $id)->first();
        $data_survei->delete();
        FacadesAlert::success('Success', 'Data Berhasil Di Hapus');
        return redirect()->route('index-survei');
    }
}
