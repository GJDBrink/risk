<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    public function start(){
        $total_players = 3;

        $players = array(array(),array(),array());

        $taken = array();

        for($x = 0; $x < $total_players; $x++){
            for($i = 0; $i < 15; $i++){

                $number = rand(1,45);

                while(in_array($number, $taken)){
                    $number = rand(1,45);
                }

                $players[$x][] = $number;
                $taken[] = $number;
            }
        }

        return view('game.start');

        //dd($players);
    }

    public function attack(){
        $attackers = 10;
        $defenders = 6;

        $attack_dices = 3;
        $attack_dices_content = array();

        for($i = 0; $i < $attack_dices; $i++){
            $attack_dices_content[] = rand(1,6);
        }

        rsort($attack_dices_content);

        $defend_dices = 2;
        $defend_dices_content = array();

        for($i = 0; $i < $defend_dices; $i++){
            $defend_dices_content[] = rand(1,6);
        }

        rsort($defend_dices_content);

        $out['attack'] = $attack_dices_content;
        $out['defend'] = $defend_dices_content;

        dd($out);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
