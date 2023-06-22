<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Alert;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class VideoController extends Controller
{
    public function store(Request $request)
    {
        if ($request->file('video')) {
            $file = $request->file('video')->store('video', 'public');
        }
        if ($request->file('sampul')) {
            $sampul = $request->file('sampul')->store('sampul', 'public');
        }
        Video::create([
            "judul"=>$request->input('judul'),
            "sampul"=>$sampul,
            "video"=>$file,
        ]);
        FacadesAlert::success('Success', 'Data Berhasil Di Tambahkan');
        return redirect()->route('index-video');
    }

    public function create()
    {
        return view('dashboard.video.create');
    }

    public function index()
    {
        $video = Video::paginate(10);
        return view('dashboard.video.index', compact('video'));
    }

    public function edit($id)
    {
        $video = Video::where('id', $id)->first();
        return view('dashboard.video.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $video = Video::where('id', $id)->first();
        if ($request->file('video')) {
            $file = $request->file('video')->store('video', 'public');
            if ($video->video && file_exists(storage_path('app/public/', $video->video))) {
                Storage::delete('public/'. $video->video);
                $file = $request->file('video')->store('video', 'public');
            }
        }
        if ($request->file('sampul')) {
            $sampul = $request->file('sampul')->store('sampul', 'public');
            if ($video->sampul && file_exists(storage_path('app/public/', $video->sampul))) {
                Storage::delete('public/'. $video->sampul);
                $sampul = $request->file('sampul')->store('sampul', 'public');
            }
        }
        if ($request->file('video') === null) {
            $file = $video->video;
        }
        if ($request->file('sampul') === null) {
            $sampul = $video->sampul;
        }
        $video->update([
            "judul"=>$request->input('judul'),
            "sampul"=>$sampul,
            "video"=>$file,
        ]);
        FacadesAlert::success('Success', 'Data Berhasil Di Update');
        return redirect()->route('index-video');
    }

    public function delete($id)
    {
        $video = Video::where('id', $id)->first();
        if ($video->video && file_exists(storage_path('app/public/', $video->video))) {
            Storage::delete('public/'. $video->video);
        }
        if ($video->sampul && file_exists(storage_path('app/public/', $video->sampul))) {
            Storage::delete('public/' . $video->sampul);
        }
        $video->delete();
        FacadesAlert::success('Success', 'Data Berhasil Di Hapus');
        return redirect()->route('index-video');
    }
}
