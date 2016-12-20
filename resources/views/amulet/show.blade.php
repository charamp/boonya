@extends('layouts.master')

@section('amulet.amuletlist')

	<div class='row'>
		<div class='col s12'>
			<div class="carousel">
				<a class="carousel-item" href="#one!"><img src="{{ $result['amulet_image'][0] }}" width='500'></a>
				<a class="carousel-item" href="#two!"><img src="{{ $result['amulet_image'][0] }}"></a>
				<a class="carousel-item" href="#three!"><img src="{{ $result['amulet_image'][0] }}"></a>
			</div>
		</div>
	</div>

@stop