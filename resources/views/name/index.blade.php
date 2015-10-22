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
        <label>Email <input type='checkbox' name='email' value='{{ isset($request['email']) ? $request['email']: ''}}'></label></br>
        <label>Address <input type='checkbox' name='address' value='{{ isset($request['address']) ? $request['address']: ''}}'></label></br>
        <label>Phone <input type='checkbox' name='phone' value='{{ isset($request['phone']) ? $request['phone']: ''}}'></label></br>
        <label>Username <input type='checkbox' name='username' value='{{ isset($request['username']) ? $request['username']: ''}}'></label></br>
        <label>Password <input type='checkbox' name='password' value='{{ isset($request['password']) ? $request['password']: ''}}'></label></br>
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
    <div class="col-md-4">
      <div class="col-md-8">
        @if(isset($results))
          @foreach($results as $user)
            <!-- @foreach($user as $label => $data) -->
              <strong>{{$label}}:</strong> {{$data}} </br>
            <!-- @endforeach -->
          @endforeach
        @endif
      </div>
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
