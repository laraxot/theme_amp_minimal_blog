@extends('pub_theme::layouts.plane')
@section('body')
<div class="wrap">
		<form role="search" class="penci-search-form clearfix empty" action="" target="_top" novalidate>

		<label class="search-label">Search on site</label>

		<div class="search-input">
			<input type="search" class="search-field" placeholder="Enter keyword..." value="" name="s"/>
			<input type="submit" class="search-submit button" value="Search"/>
		</div>

		</form>
	@include('pub_theme::layouts.partials.footer')
</div>
@endsection
