@extends('layouts.master')

@section('admin.addamulet')

<div class='row'>
<div class='col s12 search-card'>
	<h5 class='center-align'>เพิ่มข้อมูลพระเครื่อง</h5>
</div>
</div>
<div class="row">

    <form class="col s12">
      	<div class="row addamulet-card">
	        <div class="input-field col s12">
	          	<input id="amulet_name" type="text" class="validate" length='255'>
	          	<label for="amulet_name">ชื่อพระเครื่อง</label>
	        </div>
      	</div>
      	<div class="row addamulet-card">
	        <div class="input-field col s12">
	          	<textarea id="amulet_description" type="text" class="materialize-textarea" length='500'></textarea>
	          	<label for="amulet_description">รายละเอียดพระเครื่อง</label>
	        </div>
      	</div>
      	<div class="row addamulet-card">
	        <div class="input-field col s12">
	          	<input id="amulet_author" type="text" class="validate" length='255'>
	          	<label for="amulet_author">พระเกจิผู้สร้าง</label>
	        </div>
      	</div>
      	<div class="row addamulet-card">
	        <div class="input-field col s6">
	          	<input id="amulet_price" type="text" class="validate" length='10'>
	          	<label for="amulet_price">ราคาพระเครื่อง</label>
	        </div>
	        <div class="input-field col s6">
			    <select>
			      	<option value="พร้อมเช่า" selected>พร้อมเช่า</option>
			      	<option value="เช่าแล้ว">เช่าแล้ว</option>
			      	<option value="พระโชว์">พระโชว์</option>
			    </select>
			    <label>สถานะพระเครื่อง</label>
			</div>
      	</div>
      	<div class='row addamulet-card add-image'>
			<div class="file-field input-field">
				<div class="btn">
					<span>รูปพระ</span>
					<input type="file">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>

      	</div>
    </form>
  </div>


@stop
