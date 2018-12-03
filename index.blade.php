@extends('pub_theme::layouts.app')
@section('content')
	<div class="penci-archive__list_posts listing-1">
		@php
			$arts=$article->archive()->paginate(5);
		@endphp
		@foreach($arts as $art)
			@include('pub_theme::layouts.items.article',['row'=>$art])
			<br/>
		@endforeach
	</div>
	@include('pub_theme::layouts.partials.pagination',['rows'=>$arts])
@endsection