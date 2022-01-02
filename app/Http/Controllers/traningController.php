<?php

namespace App\Http\Controllers;
use App\student;
use App\traning;
use Illuminate\Http\Request;

class traningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function relation($id){
        $traning = student::find($id);
        // dd($traning);
        // $nameEnglish= $traning->student->studentEnglish;
        return view('students.traning',compact('traning'));
    }

    public function index()
    {
        $traning = traning::all();
        return view('students.payment', compact('traning'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $payment= traning::create($request->all());
       return view('students.payment', compact('payment'));
        // echo 'hello';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\traning  $traning
     * @return \Illuminate\Http\Response
     */
    public function show(traning $traning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\traning  $traning
     * @return \Illuminate\Http\Response
     */
    public function edit(traning $traning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\traning  $traning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, traning $traning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\traning  $traning
     * @return \Illuminate\Http\Response
     */
    public function destroy(traning $traning)
    {
        //
    }
}
