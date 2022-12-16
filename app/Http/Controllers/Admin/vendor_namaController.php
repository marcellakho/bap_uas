<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\vendor_nama;
use Illuminate\Http\Request;

class vendor_namaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $vendor_nama = vendor_nama::where('nama_vendor', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->orWhere('no_telp', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $vendor_nama = vendor_nama::latest()->paginate($perPage);
        }

        return view('admin.vendor_nama.index', compact('vendor_nama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.vendor_nama.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        vendor_nama::create($requestData);

        return redirect('admin/vendor_nama')->with('flash_message', 'vendor_nama added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $vendor_nama = vendor_nama::findOrFail($id);

        return view('admin.vendor_nama.show', compact('vendor_nama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $vendor_nama = vendor_nama::findOrFail($id);

        return view('admin.vendor_nama.edit', compact('vendor_nama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $vendor_nama = vendor_nama::findOrFail($id);
        $vendor_nama->update($requestData);

        return redirect('admin/vendor_nama')->with('flash_message', 'vendor_nama updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        vendor_nama::destroy($id);

        return redirect('admin/vendor_nama')->with('flash_message', 'vendor_nama deleted!');
    }
}
