@extends('layouts.blog')
 
@section('sidebar')
     @parent
     Informaci&oacute;n de usuario
@stop
 
@section('content')
	@for ($i = 0; $i < 12; $i++)

		 <div class="col-lg-3 col-md-4 col-xs-6 thumb">
	    	<a class="thumbnail" href="#">
	        	<img class="img-responsive" src="http://placehold.it/400x300">
	    	</a>
		 </div>

	 @endfor
@stop
