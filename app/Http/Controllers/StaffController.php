<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Staff::all();
        return view('admin.staff.index', [
            'all_data'      => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this -> validate($request, [
            'name'      => 'required'
        ]); 


        if( $request -> hasFile('photo') ){

            $file = $request -> file('photo');
            $file_name = md5( time() . rand() ) . '.' . $file -> clientExtension();
            $file -> move(storage_path('app/public/staff/'), $file_name);

        }else{
            $file_name = 'avatar.jpg';
        }


        Staff::create([
            'name'                  => $request -> name,
            'facebook'              => $request -> fb,
            'twitter'               => $request -> tw,
            'linkedin'              => $request -> lin,
            'instagram'             => $request -> ins,
            'photo'                 =>  $file_name
        ]);


        return redirect() -> route('staff.create') -> with('success', 'Staff added successful');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $data = Staff::find($id);  
        
        return view('admin.staff.show', [
            'staff'     => $data 
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $delete_data =  Staff::find($id);
       $delete_data -> delete();
       return redirect() -> route('staff.index');
    }
}
