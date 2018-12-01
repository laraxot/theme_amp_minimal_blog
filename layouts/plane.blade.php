<!doctype html>
<html ⚡ lang="{{ $lang }}">
@section('htmlheader')
	@include('pub_theme::layouts.partials.htmlheader')
@show
	<body  class="bp-legacy blog wp-custom-logo penci-amp-body sticky-header group-blog hfeed header-sticky penci_enable_ajaxsearch penci_enable_retina penci_sticky_content_sidebar blog-default two-sidebar wpb-js-composer js-comp-ver-5.4.5 vc_responsive no-js">
		@section('sidebar')
			@include('pub_theme::layouts.partials.sidebar')
		@show
		<div class="penci-amp-wrapper">
			@section('headernav')
				@include('pub_theme::layouts.partials.headernav')
			@show
			@yield('body')

			
		</div>
	</body>
</html>
