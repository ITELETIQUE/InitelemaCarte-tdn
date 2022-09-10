@extends('layaout.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-offset-1">
			<h2>Get In Touch</h2>
			<p class="text-muted">If you having trouble with this service, please <a href="mailto: {{config('Initelema.admin_support_email')}} ">ask for help</a>.</p>
			<form action="{{ route('contact.store')}}" method="POST">
				 @csrf
			   @include('contacts._form')
			</form>
		</div>
	</div>
</div>

@stop 