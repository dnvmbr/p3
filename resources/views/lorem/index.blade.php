@extends('layouts.master')

@section('title')
    Generate Lorem Ipsum Text!
@stop


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
      <h1>{{'Generate Lorem Ipsum Text!'}}</h1>
    </div>
    <div class="col-md-4">
      <form method='POST' action='/lorem'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <label>Number Of Paragraphs: <input type='number' name='para_num' value='{{ isset($request['para_num']) ? $request['para_num']: '3'}}'></label></br>

        @if(count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif
        <input type='submit' value='Generate!' class='btn btn-default'>
      </form>
    </div>
    <div class="col-md-8">
      @if(isset($paragraphs))
        @for ($i=0; $i<count($paragraphs); $i++)
          <p>{{$paragraphs[$i]}}</p>
          </br>
        @endfor
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
