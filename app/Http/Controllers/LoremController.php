<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator;

class LoremController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //return 'Show the rate index';
        return view('lorem.index');
    }
    public function postIndex(Request $request)
    {
      $this->validate($request, [
        'para_num' => 'required|numeric',
      ]);

      $data = $request->all();
      //Create new lorem ipsum paragraphs
      $generator = new Generator();
      $paragraphs = $generator->getParagraphs($data['para_num']);

      return view('lorem.index')
        ->with('paragraphs',$paragraphs)
        ->with('request', $request);
    }
}
