<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Barang';

        $barang = Barang::all();

        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Employee';

        $satuans = Satuan::all();

        return view('barang.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :Attribute dengan angka',
            'unique' => 'Kode tidak boleh sama dengan barang lain'
        ];

        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required',
            'kode_barang' => 'required|unique:barangs,kode_barang,',
            'deskripsi_barang' => 'required',
            'harga_barang' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();

        }

        // INSERT QUERY
        $barang = new Barang;
        $barang->kode_barang = $request->input('kode_barang');
        $barang->nama_barang = $request->input('nama_barang');
        $barang->deskripsi_barang = $request->input('deskripsi_barang');
        $barang->harga_barang = $request->input('harga_barang');
        $barang->satuan_id = $request->input('satuan');
        $barang->save();

        // DB::table('employees')->insert([
        //     'firstname' => $request->firstName,
        //     'lastname' => $request->lastName,
        //     'email' => $request->email,
        //     'age' => $request->age,
        //     'position_id' => $request->position,
        // ]);

        return redirect()->route('barangs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Barang Detail';

        // Eloquent
        $barang = Barang::find($id);


        return view('barang.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Barang Edit';

        // ELOQUENT
        $satuans = Satuan::all();
        $barang = Barang::find($id);

        // Query Builder
        // $employee = Employee::leftJoin('positions', 'positions.id', '=', 'employees.position_id')
        //     ->select('employees.*', 'positions.name as position_name', 'positions.id as position_id')
        //     ->where('employees.id', $id)
        //     ->first();

        // $positions = Position::get();

        // dd($employee);
        return view('barang.edit', [
            'pageTitle' => $pageTitle,
            'barang' => $barang,
            'satuan' => $satuans
        ]);
        // return view('employee.edit', compact('pageTitle', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'unique' => 'Isi : Dengan Kode yang berbeda'
        ];

        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required',
            'kode_barang' => 'required|unique:barangs,kode_barang,'.$id,
            'deskripsi_barang' => 'required',
            'satuan' => 'required',

            'harga_barang' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();

        }

        // ELOQUENT
        $barang = Barang::find($id);
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->satuan_id = $request->satuan;
        $barang->save();


        return redirect()->route('barangs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
           // ELOQUENT
    Barang::find($id)->delete();

    return redirect()->route('barangs.index');
    }
}
