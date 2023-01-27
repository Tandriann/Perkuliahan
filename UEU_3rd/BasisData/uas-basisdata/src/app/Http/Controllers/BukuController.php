<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::connection("mysql")->table("buku")->get();
        return response()->json($query, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        $this->validate($request, [
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required'
        ]);

        $request['created_at'] = $timestamp;
        $request['updated_at'] = $timestamp;

        $query = DB::connection('mysql')->table('buku')->insert($request->all());
        return response()->json('Berhasil Diambahkan', 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku, $id)
    {
        $query = DB::connection("mysql")->table("buku")->find($id);
        if ($query == NULL) {
            return response()->json("data kosong!", 404);
        } else {
            return response()->json($query, 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(buku $buku, $id)
    {
        $query = DB::connection("mysql")->table("buku")->where("id", $id)->get();
        return response()->json("edit $query", 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, buku $buku, $id)
    {
        $query = DB::connection("mysql")->table("buku")->find($id);
        if ($query == NULL) {
            return response()->json("data yg mau diupdate kosong!", 404);
        } else {
            $timestamp = \Carbon\Carbon::now()->toDateTimeString();
            $request["updated_at"] = $timestamp;
            $query = DB::connection("mysql")->table("buku")->where("id", $id)->update($request->all());
            return response()->json("data berhasil diubah!", 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * 
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $query = DB::connection("mysql")->table("buku")->find($id);
        if ($query == NULL) {
            return response()->json("data pada id=$id yang mau dihapus tidak ada!", 404);
        } else {
            $query = DB::connection("mysql")->table("buku");
            $query->find($id);
            $query->delete($id);
            return response()->json("data pada id=$id, berhasil dihapus!", 200);
        }
    }
}
