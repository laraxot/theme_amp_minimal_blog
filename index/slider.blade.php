			<div class="homepage-slider">
				<amp-carousel class="amp-slider amp-featured-slider" layout="responsive" type="slides" width="780" height="500" delay="3500">

					@foreach($post->archive()->get() as $post)
						<div class="slider-item">
							<amp-img src="{{ url($post->image_resize_src['100x100_canvas']) }}" alt="Welcome" height="500" width="780"></amp-img>
							<div class="content-holder">
								<h3><a href="">{{ $post->title }}</a></h3>
							</div>
						</div>
					@endforeach



					<!-- <div class="slider-item">
						<div id="penci-slider-img-holder1990" class="img-holder"></div>
						<div class="content-holder">
							<h3><a href="http://pennews.pencidesign.com/amp/head-to-head-apple-macbook-air-vs-microsoft-surface-laptop/">Apple MacBook Air Vs. Microsoft Surface Laptop</a></h3>
						</div>
					</div>
					<div class="slider-item">
						<div id="penci-slider-img-holder1989" class="img-holder"></div>
						<div class="content-holder">
							<h3><a href="http://pennews.pencidesign.com/amp/3-books-to-help-you-create-a-new-lifestyle-that-lasts/">3 Books to Help You Create a New Lifestyle that Lasts</a></h3>
						</div>
					</div>
					<div class="slider-item">
						<div id="penci-slider-img-holder1985" class="img-holder"></div>
						<div class="content-holder">
							<h3><a href="http://pennews.pencidesign.com/amp/a-home-so-uncluttered-that-it-almost-looks-empty/">A Home So Uncluttered That It Almost Looks Empty</a></h3>
						</div>
					</div> -->
				</amp-carousel>
			</div>
