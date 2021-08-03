<?php

namespace App\Http\Controllers;

use DB;
use App\Aulas;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class AulasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('cadastros.aulas.index');
    }

    public function obteraulas() {
        return \Datatables::of(Aulas::orderByDesc('id'))->make(true);
    }

    public function create()
    {
    }

    public function store(Request $request) {
    }

    public function edit($id) {
    }


    /**
     * Update the given user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
    }

    public function destroy($id)
    {
    }
}
