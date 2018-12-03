<div class="homepage-slider">
	<amp-carousel class="amp-slider amp-featured-slider" layout="responsive" type="slides" width="780" height="500" delay="3500">
		@foreach($article->archive()->get() as $post)
			<div class="slider-item">
				<amp-img src="{{ asset($post->imageResizeSrc(['width'=>780,'height'=>500])) }}" alt="Welcome" height="500" width="780"></amp-img>
				<div class="content-holder">
					<h3><a href="">{{ $post->title }}</a></h3>
				</div>
			</div>
		@endforeach
	</amp-carousel>
</div>
