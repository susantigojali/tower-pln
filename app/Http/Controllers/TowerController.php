<?php

namespace App\Http\Controllers;

use App\Model\Tower;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTowerRequest;

class TowerController extends Controller
{
     private $tower;

    public function __construct(Tower $tower) {
        $this->tower = $tower;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $towers; 
        if ($request->name) {
            $towers = $this->tower->where('name', 'like', '%'.$request->name.'%')->get();
            
        } else {
            $towers = $this->tower->get();
        }

        if ($request->ajax()) {
            return response()->json($towers);
        } else {
            return view('tower.list', compact('towers'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tower.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTowerRequest $request)
    {
        $this->tower->create($request->all());
        return redirect()->route('tower.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Tower  $tower
     * @return \Illuminate\Http\Response
     */
    public function show(Tower $tower)
    {
        //  $tower = $this->tower->find($id);

        // return view('user.profile', ['user' => $user]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Tower  $tower
     * @return \Illuminate\Http\Response
     */
    public function edit(Tower $tower)
    {
        return view('tower.edit', compact('tower'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Tower  $tower
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTowerRequest $request, Tower $tower)
    {
        $tower->fill($request->all())->save();
        
        return redirect()->route('tower.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Tower  $tower
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tower $tower)
    {
        return $request;
        $tower->delete();
        return redirect()->route('tower.index');
        
    }


    /**
     * Show the tower in map
     * @return \Illuminate\Http\Response
     */
    public function showMap()
    {
        $towers = $this->tower->get();
        //return $towers;
        return view('tower.show_map', compact('towers'));
        
    }
}
