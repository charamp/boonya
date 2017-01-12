@extends('layouts.master')

@section('amulet.amuletlist')

	<div class='row card'>
		<div class='col s12'>

			<div class='row'>
				<div class='col s12'>
					<h5>{{ $result['amulet_name'] }}</h5>
				</div>
			</div>

			<div class='row'>
				<div class='col s12'>
					<div class='row'>
						<div class='col s12'>
							<img src="{{ $result['amulet_image'][0] }}" width='500'>
						</div>
					</div>

					<div class='row'>
						<div class='col s12'>
							<img src="{{ $result['amulet_image'][0] }}" width='500'>
						</div>
					</div>

					<div class='row'>
						<div class='col s12'>
							<img src="{{ $result['amulet_image'][0] }}" width='500'>
						</div>
					</div>
				</div>
			</div>

			<div class='row'>
				<div class='col s12'>
					<h5>{{ $result['amulet_name'] }}</h5>
				</div>
			</div>

			<div class='row'>
				<div class='col s12'>
					<h5>{{ $result['amulet_description'] }}</h5>
				</div>
			</div>

			<div class='row'>
				<div class='col s12'>
					<h5>{{ $result['amulet_price'] }}</h5>
				</div>
			</div>

			<div class='row'>
				<div class='col s12'>
					<h5>{{ $result['amulet_status'] }}</h5>
				</div>
			</div>

		</div>
	</div>

@stop