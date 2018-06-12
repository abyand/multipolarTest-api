<?php

namespace App\Http\Controllers;

use App\BasicTable;
use Illuminate\Http\Request;

class BasicTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BasicTable  $basicTable
     * @return \Illuminate\Http\Response
     */
    public function show(BasicTable $basicTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BasicTable  $basicTable
     * @return \Illuminate\Http\Response
     */
    public function edit(BasicTable $basicTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BasicTable  $basicTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BasicTable $basicTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BasicTable  $basicTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasicTable $basicTable)
    {
        //
    }


    //API code
    public function addRow(Request $request)
    {
      $message = "Success";

      $row = BasicTable::create([
			       'input' => $request['input'],
             'output' => $request['output'],
             'tanggal_proses' => $request['tanggal_proses'],
             'kata_berulang' => $request['kata_berulang'],
			]);

      if($row == null) $message = "Failed";

      $response = array(
        'response' => $message,
        'data' => $row
      );
      return \Response::json($response, 200);
    }

    public function getAllRow()
    {
      $message = "Success";

      $rows = BasicTable::get();

      if($rows == null) $message = "Failed";


      $response = array(
        'response' => $message,
        'data' => $rows
      );
      return \Response::json($response, 200);
    }

}
