@extends('layouts.master')

@section('admin.amuletlist')

	<div class='row'>
		<div class='col s3'>
			<p>รายการจัดการ</p>
			<div class='row'>
				<div class='col s12'>
					<div class="collection">
					    <a href="/manage/amuletlist" class="collection-item active">รายการพระเครื่อง</a>
					    <a href="/manage/addamulet" class="collection-item">เพิ่มพระเครื่อง</a>
					    <a href="/amulet" class="collection-item">ค้นหาพระเครื่อง</a>
					</div>
				</div>
			</div>
		</div>
		<div class='col s9'>
			<p>พระเครื่องทั้งหมด</p>
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
		</div>
	</div>


@stop
