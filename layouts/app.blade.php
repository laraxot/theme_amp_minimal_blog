@extends('pub_theme::layouts.plane')
@section('body')
@include($view.'.slider')
<div class="wrap">
	@yield('content')
	@include('pub_theme::layouts.partials.footer')
</div>    
@endsection


