<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::connection("mysql")->table("peminjaman")->get();
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
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'status' => 'required'
        ]);

        $request['created_at'] = $timestamp;
        $request['updated_at'] = $timestamp;

        $query = DB::connection('mysql')->table('peminjaman')->insert($request->all());
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
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(peminjaman $peminjaman, $id)
    {
        $query = DB::connection("mysql")->table("peminjaman")->find($id);
        if ($query == NULL) {
            return response()->json("data kosong!", 404);
        } else {
            return response()->json($query, 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(peminjaman $peminjaman, $id)
    {
        $query = DB::connection("mysql")->table("peminjaman")->where("id", $id)->get();
        return response()->json("edit $query", 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peminjaman $peminjaman, $id)
    {
        $query = DB::connection("mysql")->table("peminjaman")->find($id);
        if ($query == NULL) {
            return response()->json("data yg mau diupdate kosong!", 404);
        } else {
            $timestamp = \Carbon\Carbon::now()->toDateTimeString();
            $request["updated_at"] = $timestamp;
            $query = DB::connection("mysql")->table("peminjaman")->where("id", $id)->update($request->all());
            return response()->json("data berhasil diubah!", 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(peminjaman $peminjaman, $id)
    {
        $query = DB::connection("mysql")->table("peminjaman")->find($id);
        if ($query == NULL) {
            return response()->json("data pada id=$id yang mau dihapus tidak ada!", 404);
        } else {
            $query = DB::connection("mysql")->table("peminjaman");
            $query->find($id);
            $query->delete($id);
            return response()->json("data pada id=$id, berhasil dihapus!", 200);
        }
    }
}
