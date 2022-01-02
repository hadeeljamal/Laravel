<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Student;
//use Excel;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        $items = student::orderByDesc('id');

        $q = $request->q;
        if($request->q){

            $items->where('studentEnglish', 'like', '%' . $q . '%');
        }
        $items=$items->paginate(10);
        return view('students.allstudent', compact('items','q'));


    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.allstudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validator::make($request->all(), [
        //     'name' => 'required|min:10',
        //     'collage' => 'required',
        //     'university' => 'required'
        // ],[
        // 'required' => 'The :attribute field is required.'])->validate();
        student::create($request->all());
        return redirect()->action('StudentController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, $id)
    {
        $student = student::find($id);
        return view('students.editadd', compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student, $id)
    {
        // $request->validate([
        //     'name' => 'required|min:10',
        //     'collage' => 'required',
        //     'university' => 'required'
        // ]);
        $student = student::find($id);
        $student->update($request->all());
        return redirect()->action('StudentController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student, $id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect()->action('StudentController@index');

    }


    public function pdfview(Request $request)
    {
        $student = student::paginate(10);
        //  $items = DB::table("items")->get();
        view()->share('student', $student);

        // if($request->has('download')){
        $pdf = PDF::loadView('pdfview');
        return $pdf->download('pdfview.pdf');
        //  }

        //  return view('pdfview');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
