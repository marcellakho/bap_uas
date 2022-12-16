<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\missing-item-status;
use Illuminate\Http\Request;

class missing-item-statusController extends Controller
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
            $missing-item-status = missing-item-status::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $missing-item-status = missing-item-status::latest()->paginate($perPage);
        }

        return view('admin.missing-item-status.index', compact('missing-item-status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.missing-item-status.create');
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
        
        missing-item-status::create($requestData);

        return redirect('admin/missing-item-status')->with('flash_message', 'missing-item-status added!');
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
        $missing-item-status = missing-item-status::findOrFail($id);

        return view('admin.missing-item-status.show', compact('missing-item-status'));
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
        $missing-item-status = missing-item-status::findOrFail($id);

        return view('admin.missing-item-status.edit', compact('missing-item-status'));
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
        
        $missing-item-status = missing-item-status::findOrFail($id);
        $missing-item-status->update($requestData);

        return redirect('admin/missing-item-status')->with('flash_message', 'missing-item-status updated!');
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
        missing-item-status::destroy($id);

        return redirect('admin/missing-item-status')->with('flash_message', 'missing-item-status deleted!');
    }
}
