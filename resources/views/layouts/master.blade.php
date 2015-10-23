<!doctype html>
<html>
<head>
    <title>
        @yield('title','P3')
    </title>

    <meta charset='utf-8'>

<link rel="stylesheet" type="text/css" href="/style.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>


    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
        <div>
          <a href='/'><h1>Hai fraaaaands, welcome to p3!</h1></a>
          <a class="btn btn-warning" href="/lorem" role="button">Generate some Lorem Ipsum!</a>
          <a class="btn btn-warning" href="/names" role="button">Generate some fake names</a>
        </div>
    </header>

    <section>
        {{-- Main page content will be yielded here --}}

        @yield('content')
    </section>

    <footer>
      <a href='http://p1.dannovember.me'> Dan November</a> &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
