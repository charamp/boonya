@extends('layouts.manage')

@section('admin.addamulet')

		<div class='row'>
			<div class='col s12'>
				<div class='row'>
					<div class='col s12 search-card'>
						<h5 class='center-align'>เพิ่มข้อมูลพระเครื่อง</h5>
					</div>
				</div>

				<div class="row">

				    <form class="col s12" method='post' action='/manage/doaddamulet' enctype="multipart/form-data">
				      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				      	<div class="row">
					        <div class="input-field col s12">
					          	<input id="amulet_name" name="amulet_name" type="text" class="validate" length='255'>
					          	<label for="amulet_name">ชื่อพระเครื่อง</label>
					        </div>
				      	</div>
				      	<div class="row">
					        <div class="input-field col s12">
					          	<textarea id="amulet_description" name="amulet_description" type="text" class="materialize-textarea" length='500'></textarea>
					          	<label for="amulet_description">รายละเอียดพระเครื่อง</label>
					        </div>
				      	</div>
				      	<div class="row">
					        <div class="input-field col s12">
					          	<input id="amulet_author" name="amulet_author" type="text" class="validate" length='255'>
					          	<label for="amulet_author">พระเกจิผู้สร้าง</label>
					        </div>
				      	</div>
				      	<div class="row">
					        <div class="input-field col s6">
					          	<input id="amulet_price" name="amulet_price" type="text" class="validate" length='10'>
					          	<label for="amulet_price">ราคาพระเครื่อง</label>
					        </div>
					        <div class="input-field col s6">
							    <select name="amulet_status[]">
							      	<option value="พร้อมเช่า" selected>พร้อมเช่า</option>
							      	<option value="เช่าแล้ว">เช่าแล้ว</option>
							      	<option value="พระโชว์">พระโชว์</option>
							    </select>
							    <label>สถานะพระเครื่อง</label>
							</div>
				      	</div>
				      	<div class='row'>
				      		<div class='col s12'>
				      			<?php $i = 0; ?>
				      			@foreach($category_list as $category)
				      				@if($i%4==0)
				      					<div class='row'>
				      				@endif
				      					<div class='col s3'>
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
				      		
				      		</div>
				      	</div>
				      	<div class='row add-image'>
							<div class="file-field input-field 2 col s12">
								<div class="btn">
									<i class="material-icons left">add</i>
									<span>รูปพระ</span>
									<input type="file" name="amulet_image[]">
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
								</div>
							</div>
							<div class="file-field input-field 2 col s12">
								<div class="btn">
									<i class="material-icons left">add</i>
									<span>รูปพระ</span>
									<input type="file" name="amulet_image[]">
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
								</div>
							</div>
							<div class="file-field input-field 2 col s12">
								<div class="btn">
									<i class="material-icons left">add</i>
									<span>รูปพระ</span>
									<input type="file" name="amulet_image[]">
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
								</div>
							</div>
				      	</div>
				      	<div class='row'>
				      		<div class='col s12 center-align'>
						      	<button class="btn waves-effect waves-light btn-large" type="submit" name="action">เพิ่มพระเครื่อง
								    <i class="material-icons right">send</i>
								</button>
							</div>
						</div>
				    </form>

				</div>
			</div>
		</div>


@stop
