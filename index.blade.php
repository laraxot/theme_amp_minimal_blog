@extends('pub_theme::layouts.app')
@section('content')
	<div class="penci-archive__list_posts listing-1">
		@php
			$posts=$post->archive()->paginate(5);
		@endphp
		@foreach($posts as $p)
			@include('pub_theme::layouts.items.post')
			<br/>
		@endforeach
	</div>
	@include('pub_theme::layouts.partials.pagination')
@endsection