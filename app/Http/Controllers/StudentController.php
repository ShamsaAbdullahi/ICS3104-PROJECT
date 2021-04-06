<?php

namespace App\Http\Controllers;

use App\Models\Students;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::all()->toArray();
        return view('index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = $this->validate(request(), [
            'age' => 'required',
            'fullname' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'age' => 'integer|min:18'
        ]);
        Students::create([
            'admin' => $students= $request ->input('admin'),
            'fullname' => $students=$request->Input('fullname'),
            'surname' => $students=$request->Input('surname'),
            'nationalid' => $students =$request->Input('nationalid'),
            'speciality' => $students =$request->input('speciality'),
            'email' => $students =$request->input('email'),
            'age' => $students =$request->input('age'),
            'guardianfname' => $students =$request->input('guardianfname'),
            'guarrdian_nationalid' => $students =$request->input('guarrdian_nationalid'),
            'guardian_mobile' => $students =$request->input('guardian_mobile')

        ]);
        return back()->with('success', 'Information has been successfully entered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Students::find($id);
        $student = Students::all() ;
        return view('index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Students::find($id);
        return view('edit', compact('students', 'id'));
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
        $students = Students::find($id);
        $this->validate(request(), [
            'fullname' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'age' => 'integer|min:0'
        ]);



        $students->admin = $request ->input('admin');
        $students->fullname = $request ->input('fullname');
        $students->surname = $request ->input('surname');
        $students->nationalid = $request ->input('nationalid');
        $students->speciality = $request ->input('speciality');
        $students->email = $request ->input('email');
        $students->age = $request ->input('age');
        $students->guardianfname = $request ->input('guardianfname');
        $students->guarrdian_nationalid =$request ->input('guarrdian_nationalid');
        $students->guardian_mobile = $request ->input('guardian_mobile');

        $students->save();


        //return back()->with('success', 'Registry updated successfully');
        return redirect('students')->with('success', 'Registry updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Students::find($id);
        $students->delete();
        return redirect('students')->with('success', 'student has been  deleted');
    }
}
