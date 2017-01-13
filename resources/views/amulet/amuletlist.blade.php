@extends('layouts.master')

@section('amulet.amuletlist')

	<div class='row'>
		<div class='col s12'>
			<div class="row">
				<div class="col s12 search-card">
					<nav>
						<div class="nav-wrapper white">
							<form>
								<div class="input-field">
									<input id="search" type="search" placeholder='ค้นหาพระเครื่อง' required>
									<label for="search"><i class="material-icons teal-text">search</i></label>
									<i class="material-icons">close</i>
								</div>
							</form>
						</div>
					</nav>
				</div>
			</div>

			<?php $i = 0; ?>
			@foreach($category_list as $category)
				@if($i%4==0)
					<div class='row filter-card center-align'>
				@endif
 
					<div class='col s3 left-align'>

						<input type="checkbox" name="amulet_category[]" value="{{ $category['CATEGORY_ID'] }}" class="filled-in" id="{{ $category['CATEGORY_ID'] }}" />
					    <label for="{{ $category['CATEGORY_ID'] }}">{{ $category['CATEGORY_NAME'] }}</label>

					</div>

				<?php $i++; ?>
				@if($i==count($category_list))
				    </div>
				@endif
				@if($i%4==0)
				    </div>
				@endif
			@endforeach

			

			<div class='row'>
				<div class='col s12 center-align'>
					<button class="btn-large waves-effect waves-light teal lighten-2" type="submit" name="action">ค้นหา
						<i class="material-icons right">search</i>
					</button>
				</div>
			</div>

		</div>
	</div>

	<div class='row card'>
		<div class='col s12'>

			<div class='row'>

				<div class='col s2'>
					<a href='#'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
					</a>
				</div>

				<div class='col s2'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

				<div class='col s2'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

				<div class='col s2'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

				<div class='col s2'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

				<div class='col s2'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class='row'>

				<div class='col s3'>
					<a href='#'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
					</a>
				</div>

				<div class='col s3'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

				<div class='col s3'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

				<div class='col s3'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class='row'>

				<div class='col s3'>
					<a href='#'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
					</a>
				</div>

				<div class='col s3'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

				<div class='col s3'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

				<div class='col s3'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class='row'>

				<div class='col s3'>
					<a href='#'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
					</a>
				</div>

				<div class='col s3'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

				<div class='col s3'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

				<div class='col s3'>
					<div class='card'>
						<div class='card-image'>
							<img src="{{URL::asset('/img/test.jpg')}}">
						</div>
						<div class='card-content'>
							<p class='black-text'>สมเด็จหลวงพ่อทดสอบ วัดระฆัง</p>
						</div>
						<div class='card-action center-align'>
							<div class="chip yellow lighten-2">
								<img src="{{URL::asset('/img/coin.png')}}" >
							500 บาท
							</div>
							<div class="chip teal accent-3">
								<img src="{{URL::asset('/img/success.png')}}" >
							พร้อมเช่า
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class='row'>
				<div class='col s12 center-align'>
					<ul class="pagination">
						<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
						<li class="active teal lighten-2"><a href="#!">1</a></li>
						<li class="waves-effect"><a href="#!">2</a></li>
						<li class="waves-effect"><a href="#!">3</a></li>
						<li class="waves-effect"><a href="#!">4</a></li>
						<li class="waves-effect"><a href="#!">5</a></li>
						<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</div>

@stop