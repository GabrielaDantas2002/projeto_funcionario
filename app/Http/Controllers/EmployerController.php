<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Occupation;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
    }


    public function index()
    {

        $employers = Employer::all();

        return view('employer.index')->with('employers', $employers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $occupations = Occupation::all();

        return view('employer.create')->with('occupations', $occupations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employer = new Employer();

        $employer->name = $request->input('name');
        $employer->lastname = $request->input('lastname');
        $employer->occupation_id = $request->input('occupation');
        $employer->save();


        return (redirect(route('employer.index')));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employer = Employer::find($id);
        $occupations = Occupation::all();


        return view('employer.edit')->with('employer', $employer)->with('occupations', $occupations);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employer = Employer::find($id);

        $employer->name = $request->input('name');
        $employer->lastname = $request->input('lastname');
        $employer->occupation_id = $request->input('occupation');

        $employer->save();

        return(redirect(route('employer.index')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employer::destroy($id);

        return (redirect(route('employer.index')));
    }
}
