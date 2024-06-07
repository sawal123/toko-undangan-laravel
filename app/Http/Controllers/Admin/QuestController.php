<?php

namespace App\Http\Controllers\Admin;


use App\Models\Question;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class QuestController extends Controller
{
    //
    public function index()
    {
        $ques = Question::all();
        return view('backend.Question.index', [
            'question' => $ques
        ]);
    }

    public function add(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:200',
            'deskripsi' => 'required|string'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        try {
            DB::beginTransaction();
            Question::create([
                'uuid' => Str::uuid(),
                'title' => $request->title,
                'question' => $request->deskripsi
            ]);
            DB::commit();
            return redirect()->back()->with('success', 'Question berhasil ditambah!');
        } catch (\Exception $ex) {
            DB::rollBack();
            return response()->json(['message' => $ex->getMessage()], $ex->getCode());
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'title'=> 'required|string|max:200',
            'deskripsi'=> 'required|string'
        ]);

        try {
            DB::beginTransaction();
            $db = Question::where('uuid', $request->uuid)->firstOrFail();
            $db->title = $request->title;
            $db->question = $request->deskripsi;
            // dd($request->deskripsi);
            $db->save();
            DB::commit();
            return redirect()->back()->with('success', 'Question berhasil diubah!');
        } catch (\Exception $ex) {
            DB::rollBack();
            return response()->json(['message' => $ex->getMessage()], 500); 
        }
    }
    public function delete($uid)
    {
        $qs = Question::where('uuid', $uid)->firstOrFail();
        $qs->delete();
        return redirect()->back()->with('success', 'Question berhasil dihapus!');

    }
}
