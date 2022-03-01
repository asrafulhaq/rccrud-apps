@extends('frontend.layouts.app')


@section('main-content') 

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="archive.html">Blog</a></li>
			</ul>
		</div>
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">
				<article>
					<div class="art-header">
						<a href="#"><h3>Nam libero tempore, cum soluta nobis est </h3></a>
						<div class="info">Posted on June 22, 2010 in: <a href="#">Event</a></div>
					</div>
					<div class="art-content">
						<img src="frontend/images/6.jpg" />
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					</div>
					<a class="button button02" href="#">MORE</a>
				</article>
				<article>
					<div class="art-header">
						<a href="#"><h3>Nam libero tempore, cum soluta nobis est </h3></a>
						<div class="info">Posted on June 22, 2010 in: <a href="#">Event</a></div>
					</div>
					<div class="art-content">
						<img src="frontend/images/4.jpg" />
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					</div>
					<a class="button button02" href="#">MORE</a>
				</article>
				<article>
					<div class="art-header">
						<a href="#"><h3>Nam libero tempore, cum soluta nobis est </h3></a>
						<div class="info">Posted on June 22, 2010 in: <a href="#">Event</a></div>
					</div>
					<div class="art-content">
						<img src="frontend/images/5.jpg" />
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					</div>
					<a class="button button02" href="#">MORE</a>
				</article>
			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<div class="wrap-sidebar">
				<!---- Start Widget ---->
				<div class="widget wid-about">
					<div class="wid-header">
						<h5>About Us</h5>
					</div>
					<div class="wid-content">
						<img src="frontend/images/15.jpg"/>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					</div>
				</div>
				<!---- Start Widget ---->
				<div class="widget wid-post">
					<div class="wid-header">
						<h5>Latest Posts</h5>
					</div>
					<div class="wid-content">
						<div class="post">
							<a href="#"><img src="frontend/images/15.jpg"/></a>
							<div class="wrapper">
							  <h5><a href="#">Lorem ipsum dolor</a></h5>
							   <span>$25 - $26</span>
							</div>
						</div>
						<div class="post">
							<a href="#"><img src="frontend/images/14.jpg"/></a>
							<div class="wrapper">
							  <h5><a href="#">Lorem ipsum dolor</a></h5>
							  <span>$25 - $26</span>
							</div>
						</div>
						<div class="post">
							<a href="#"><img src="frontend/images/13.jpg"/></a>
							<div class="wrapper">
							  <h5><a href="#">Lorem ipsum dolor</a></h5>
							   <span>$25 - $26</span>
							</div>
						</div>
					</div>
				</div>
				<!---- Start Widget ---->
				<div class="widget wid-tag">
					<div class="wid-header">
						<h5>Tags</h5>
					</div>
					<div class="wid-content">
						<a href="#">animals ,</a>
						<a href="#">cooking ,</a>
						<a href="#">countries ,</a>
						<a href="#">home ,</a>
						<a href="#">likes ,</a>
						<a href="#">photo ,</a>
						<a href="#">travel ,</a>
						<a href="#">video </a>
					</div>
				</div>
				<!---- Start Widget ---->
				<div class="widget wid-gallery">
					<div class="wid-header">
						<h5>Gallery</h5>
					</div>
					<div class="wid-content">
						<a href="#"><img src="frontend/images/11.jpg"></a>
						<a href="#"><img src="frontend/images/10.jpg"></a>
						<a href="#"><img src="frontend/images/9.jpg"></a>
						<a href="#"><img src="frontend/images/8.jpg"></a>
						<a href="#"><img src="frontend/images/7.jpg"></a>
						<a href="#"><img src="frontend/images/6.jpg"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection