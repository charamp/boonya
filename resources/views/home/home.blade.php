@extends('layouts.master')

@section('home.home')

	<div class='row'>
		<div class='col s3'>
			<p>หมวดหมู่พระเครื่อง</p>
			<div class='row'>
				<div class='col s12'>
					<div class="collection">
					    <a href="#!" class="collection-item active">ทั้งหมด</a>
					    <a href="#!" class="collection-item">พระกรุเนื้อดิน</a>
					    <a href="#!" class="collection-item">พระกรุเนื้อชิน</a>
					    <a href="#!" class="collection-item">เหรียญปั้มก่อนปี 2535</a>
					    <a href="#!" class="collection-item">เหรียญปั้มหลังปี 2535</a>
					    <a href="#!" class="collection-item">พระกริ่ง</a>
					    <a href="#!" class="collection-item">พระหล่อ</a>
					    <a href="#!" class="collection-item">พระบูชา</a>
					    <a href="#!" class="collection-item">พระปิดตา</a>
					</div>
				</div>
			</div>
		</div>
		<div class='col s9'>
			<p>รายการพระเครื่อง</p>
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
							<div class="chip red accent-1">
								<img src="{{URL::asset('/img/error.png')}}" >
							ให้เช่าแล้ว
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
							<div class="chip yellow accent-1">
								<img src="{{URL::asset('/img/star.png')}}" >
							พระโชว์
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

		</div>
	</div>

@stop