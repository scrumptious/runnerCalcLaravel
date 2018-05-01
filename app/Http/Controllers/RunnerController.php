<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Models\Runner;

class RunnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // $runners = DB::select('select * from runner order by distance DESC');
        $runners = Runner::all();
        return view('runner.index', ['runners' => $runners]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('runner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $message = null) {
        // $runner = $request->all();
        // DB::insert('insert into runner (name, age, distance, hours, minutes, seconds) values (:name, :age, :distance, :hours, :minutes, :seconds)',
        // ['name' => $runner['name'], 'age' => $runner['age'], 'distance' => $runner['distance'], 'hours' => $runner['hours'], 'minutes' => $runner['minutes'], 'seconds' => $runner['seconds']]
        // );

        // let's use Eloquent instead of raw SQL
        Runner::create($request->all());
        return redirect()->route('runner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        // $runner = DB::select('select * from runners where id = :id', ['id' =>$id]);
        $runner = Runner::find($id);
        return view('runner.show', ['runner' => $runner, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $runner = Runner::find($id);
        return view('runner.edit', ['runner' => $runner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $runner = $request->all();

        DB::insert('update runners set name = :name, age = :age, distance = :distance, hours = :hours,
        minutes = :minutes, seconds = :seconds where id = :id',
        ['name' => $runner['name'], 'age' => $runner['age'], 'distance' => $runner['distance'],
        'hours' => $runner['hours'], 'minutes' => $runner['minutes'], 'seconds' => $runner['seconds'],
        'id' => $id]
        );

        return redirect()->route('runner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        DB::delete('delete from runners where id = :id', ['id' => $id]);
        return redirect()->route('runner.index');
    }
}
