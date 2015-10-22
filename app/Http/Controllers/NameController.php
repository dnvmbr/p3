<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\Factory;

class NameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //return 'Show the rate index';
        return view('name.index');
    }


    public function postIndex(Request $request)
    {

      $this->validate($request, [
        'person_count' => 'required|numeric|max:9',
      ]);

      $faker = \Faker\Factory::create();

      // Get all the data from the form
      $data = $request->all();

      // This array will hold all the users
      $results = [];

      //create a loop!!!
      for ($i=0; $i<($data['person_count']);$i++){
        // Add default data for the user
        $user = [];
        $user['Name'] = $faker->name;
        // Figure out what data needs to be included for each user
        if(isset($data['email'])) {
          $user['Email'] = $faker->email;
        }
        if(isset($data['address'])) {
          $user['Address'] = $faker->address;
        }
        if(isset($data['phone'])) {
          $user['Phone'] = $faker->phoneNumber;
        }
        if(isset($data['username'])) {
          $user['Username'] = $faker->username;
        }
        if(isset($data['password'])) {
          $user['Password'] = $faker->password;
        }
        $results[] = $user;
      }

      /// if data data address, ad that too...

      return View('name.index')->with(
        [
        'person_count' => $data['person_count'],
        'request' => $request,
        'results' => $results,
        'data' => $data
      ]);

    }
}
