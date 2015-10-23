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

    <div class='welcomeDiv'>
      <h3>^^^oh herro, click on one of the buttons above to get started!^^^<h3>
      <h4>or just play with nyan cat!</h4>
    </div>
    <div class="nyan"></div>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
<script src="/functions.js"></script>

@stop
