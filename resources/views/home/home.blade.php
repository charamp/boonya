@extends('layouts.master')

@section('home.home')

	<div class='row'>
		<div class='col s3'>
			<p>หมวดหมู่พระเครื่อง</p>
			<div class='row'>
				<div class='col s12'>
					<div class="collection">
						<a href="#!" id='all' class="collection-item active">ทั้งหมด</a>
						@foreach($category_list as $category)
							<a href='#' id='{{ $category["CATEGORY_ID"] }}' class='collection-item'>{{ $category['CATEGORY_NAME'] }}</a>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class='col s9'>
			<p>รายการพระเครื่อง</p>

			<?php $i = 0; ?>
			@foreach($amulet_list as $amulet)
				@if($i%4==0)
					<div class='row'>
				@endif

						<div class='col s3'>
							<a href='#'>
							<div class='card'>
								<div class='card-image'>
									<img src="{{URL::asset($amulet['IMAGE'])}}">
								</div>
								<div class='card-content'>
									<p class='black-text'>{{ $amulet['AMULET_NAME'] }}</p>
								</div>
								<div class='card-action center-align'>
									<div class="chip yellow lighten-2">
										<img src="{{URL::asset('/img/coin.png')}}" >
									{{ $amulet['AMULET_PRICE'] }} บาท
									</div>
									<div class="chip teal accent-3">
										<img src="{{URL::asset('/img/success.png')}}" >
									พร้อมเช่า
									</div>
								</div>
							</div>
							</a>
						</div>
				<?php $i++; ?>
				@if($i==count($amulet_list))
					</div>
				@endif
				@if($i%4==0)
					</div>
				@endif
			@endforeach

		</div>
	</div>

@stop