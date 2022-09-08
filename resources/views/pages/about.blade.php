@extends('layaout.base')

@section('content')

<div class="container">
	<h2>What is {{ config('app.name')}} ?</h2>
	<p>Laracarte is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>

	<div class="row">
		<div class="col-md-6">
			<p class="alert alert-warning">
				<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
				<strong>This app has been built by <a href="https://twitter.com/hervengolombe">@hervengombe</a> for learning purposes.</strong>
			</p>
		</div>
	</div>

	<p>Feel free to help to improve the <a href="#">source code</a></p>

	<hr>

    <h2>What is Laramap?</h2>
    <p>Laramap is the website by which {{ config('app.name')}} was inspired :).</p>
    <p>More info <a href="https://laramap.com/p/about">here</a>.</p>

    <hr>

    <h2> Which tools and service are used in {{ config('app.name')}} ?</h2>
    <p>Basically it's built on Laravel &amp;Bootstrap. But there's a bunch of services used for email and orthr sections.</p>
    <ul>
    	<li>Laravel</li>
    	<li>Bootstrap</li>
    	<li>Amazon S3</li>
    	<li>Mandrill</li>
    	<li>Antony Martin's Geolocation Package</li>
    	<li>Michel Fortin's Markdown Parser Package</li>
    	<li>Heroku</li>
    </ul>
</div>

@stop 