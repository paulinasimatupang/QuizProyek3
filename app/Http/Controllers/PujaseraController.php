<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class PujaseraController extends Controller
{
    public function tambahdatabarang() {
        $data = Barang::all();
        return view('DataBarang', compact('data'));
    }
    public function insertdatabarang(Request $request) {
        Barang::create([
            'kodebarang' => $request->kodebarang,
            'namabarang' => $request->namabarang,
            'satuan' => $request->satuan,
            'hargasatuan' => $request->hargasatuan,
            'stok' => $request->stok,
        ]);
        return redirect()->route('tambahdatabarang')->with('success', 'Data Berhasil di Simpan');
    }

    public function editdatabarang($id){
        $data = Barang::find($id);
        return view('EditDataBarang', compact('data'));
    }

    public function updatedatabarang(Request $request, $id) {
        $data = Barang::find($id);
        $data->update($request->all());
        return redirect()->route('tambahdatabarang', ['id' => $id])->with('success', 'Data Berhasil di Simpan');
    }

    public function deletebarang($id){
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('tambahdatabarang')->with('success', 'Data berhasil dihapus');
    }
}
