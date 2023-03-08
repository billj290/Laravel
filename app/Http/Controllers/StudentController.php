<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'name' => 'Dragon ball',
            'age' => '38',
            'love' => ['laravel', 'php', 'jquery']
        ];

        $data2=[
            ['name'=>'amy',
            'mobile'=>'123'],
            ['name'=>'bob',
            'mobile'=>'456'],
            ['name'=>'cat',
            'mobile'=>'789']
        ];

        return view('student.index', ['data' => $data],['data2'=>$data2]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    //自定義function
    //view('student.firstfloor')=>要連到student資料夾的firstfloor檔案
    public function first_floor()
    {
        return view('student.firstfloor');
    }

    public function second_floor()
    {
        return view('student.secondfloor');
    }

    public function third_floor()
    {
        return view('student.thirdfloor');
    }

    public function pent_house()
    {
        return view('student.penthouse');
    }

    public function childPage()
    {
        return view('child');    
    }
}
