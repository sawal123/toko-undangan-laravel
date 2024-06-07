<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slide;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class SlideController extends Controller
{
    public function index()
    {
        $slide = Slide::orderBy('sort', 'asc')->get();
        return view('backend.Slide.index', ['slide' => $slide]);
    }

    public function add(Request $request)
    {
        try {
            $validated = $request->validate([

                'url' => 'required|string|max:255',
                'image' => 'required|max:1024',
            ]);
            $sl = Slide::select('sort')->orderBy('id', 'desc')->first();
            $slide = new Slide();
            $images = $request->file('image');
            if ($request->hasFile('image')) :
                $imageName = 'Era-Digital-' . Str::random(4) . $images->getClientOriginalName();
                $images->storeAs('slide', $imageName, 'public');
                $slide->image = $imageName;
                $slide->link = $request->url;
            endif;
            if (!$sl) {
                $slide->sort = 0;
            } else {
                $slide->sort = $sl->sort + 1;
            }
            $slide->save();
            return redirect()->back()->with('message', 'Slide Berhasil ditambah!');
        } catch (\Exception $e) {
            // Tangani pengecualian di sini
            Log::error('Error occurred: ' . $e->getMessage());

            // Lakukan sesuatu untuk menanggapi pengecualian, misalnya:
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'sort' => 'required',
                'url' => 'required|url|max:255',
                'image' => 'max:1024',
            ]);
            $upSlide = Slide::where('id', $request->id)->first();
            $upSlide->sort = $request->sort;
            $upSlide->link = $request->url;
            $images = $request->file('image');
            if ($request->hasFile('image')) :
                $imagePath = public_path() . '/storage/slide/' . $upSlide->image;
                if (file_exists($imagePath) === true) {
                    unlink($imagePath);
                }
                $imageName = 'Era-Digital-' . Str::random(4) . $images->getClientOriginalName();
                $images->storeAs('slide', $imageName, 'public');
                $upSlide->image = $imageName;
                $upSlide->link = $request->url;
            endif;
            $upSlide->save();
            return redirect()->back()->with('message', 'Data berhasil diupdate');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
    public function delete($id){
        $slide = Slide::where('id', $id)->first();
        $imagePath = public_path() . '/storage/slide/' . $slide->image;
        if (file_exists($imagePath) === true) {
            unlink($imagePath);
        }
        $slide->delete();
        return redirect()->back()->with('message', 'Slide berhasil dihapus');
    }
}
