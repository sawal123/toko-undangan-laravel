<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    //
    public function index()
    {
        $testi = Testimonial::all();
        return view('backend.testimonial.index', [
            'testi' => $testi,
        ]);
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:30',
            'testimonial' => 'required',
            'image' => 'required|max:1024',
        ]);
        try {
            DB::beginTransaction();
            $Testimonial = new Testimonial();

            $Testimonial->uuid = str::uuid();
            $Testimonial->nama = $request->nama;
            $Testimonial->testimonial = $request->testimonial;
            $images = $request->file('image');
            if ($request->hasFile('image')) :
                $imageName = 'Era-Digital-' . Str::random(4) . $images->getClientOriginalName();
                $images->storeAs('testimonial', $imageName, 'public');
                $Testimonial->gambar = $imageName;
            endif;

            $Testimonial->save();
            DB::commit();
            return redirect()->back()->with('success', 'Testimonial Berhasil ditambah!');
        } catch (\Exception $e) {
            DB::rollBack();
            // Tangani pengecualian di sini
            Log::error('Error occurred: ' . $e->getMessage());

            // Lakukan sesuatu untuk menanggapi pengecualian, misalnya:
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:30',
            'testimonial' => 'required',
            'image' => 'max:1024',
        ]);
        // dd($request->nama);
        try {
            DB::beginTransaction();

            $uptestimonial = Testimonial::where('uuid', $request->uuid)->first();
            $uptestimonial->nama = $request->nama;
            $uptestimonial->testimonial = $request->testimonial;
            $images = $request->file('image');
            if ($request->hasFile('image')) :
                $imagePath = public_path() . '/storage/testimonial/' . $uptestimonial->image;
                if (file_exists($imagePath) === true) {
                    unlink($imagePath);
                }
                $imageName = 'Era-Digital-' . Str::random(4) . $images->getClientOriginalName();
                $images->storeAs('testimonial', $imageName, 'public');
                $uptestimonial->gambar = $imageName;
            endif;

            $uptestimonial->save();
            DB::commit();
            return redirect()->back()->with('success', 'Testimonial Berhasil diubah!');
        } catch (\Exception $e) {
            DB::rollBack();
            // Tangani pengecualian di sini
            Log::error('Error occurred: ' . $e->getMessage());

            // Lakukan sesuatu untuk menanggapi pengecualian, misalnya:
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function delete($uid)
    {
        $testi = Testimonial::where('uuid', $uid)->firstOrFail();
        $testi->delete();

        $imagePath = public_path() . '/storage/testimonial/' . $testi->gambar;
        if (file_exists($imagePath) === true) {
            unlink($imagePath);
        }
        return redirect()->back()->with('success', 'Testimonial Berhasil dihapus!');
    }
}
