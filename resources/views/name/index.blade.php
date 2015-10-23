@extends('layouts.master')


@section('title', $title='Generate Some fake names!')

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
@stop


@section('content')
  <div>
    <div class='col-md-12' align='center'>
      <h1>{{'Make some fake accounts!'}}</h1>
    </div>

    <div class="col-md-4">
      <form method='POST' action='/names'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <label>Number Of People: <input type='number' name='person_count' value='{{ isset($request['person_count']) ? $request['person_count']: '5'}}'></br>
        <label>Email <input type='checkbox' name='email' value='true' {{ isset($request['email']) && $request['email'] == true ? 'checked' : '' }}></label></br>
        <label>Address <input type='checkbox' name='address' value='true' {{ isset($request['address']) && $request['address'] == true ? 'checked' : '' }}></label></br>
        <label>Phone <input type='checkbox' name='phone' value='true' {{ isset($request['phone']) && $request['phone'] == true ? 'checked' : '' }}></label></br>
        <label>Username <input type='checkbox' name='username' value='true' {{ isset($request['username']) && $request['username'] == true ? 'checked' : '' }}></label></br>
        <label>Password <input type='checkbox' name='password' value='true'{{ isset($request['password']) && $request['password'] == true ? 'checked' : '' }}></label></br>
        @if(count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <input class='btn btn-default' type='submit' value='Submit'>
      </form>
    </div>

    <div class="col-md-8">
      @if(isset($results))
        @foreach($results as $user)
          <table>
            @foreach($user as $label => $data)
              <tr><td><strong>{{$label}}: </strong></td><td> {{$data}} </td></tr>
            @endforeach
          </table></br>
        @endforeach
      @endif
    </div>
    
  </div>

@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
