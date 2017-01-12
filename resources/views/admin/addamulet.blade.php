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
	          	<input placeholder="ชื่อพระเครื่อง" id="amulet_name" type="text" class="validate">
	          	<label for="first_name">ชื่อพระเครื่อง</label>
	        </div>
      	</div>
      	<div class="row addamulet-card">
	        <div class="input-field col s12">
	          	<textarea placeholder="รายละเอียดพระเครื่อง" id="amulet_description" type="text" class="materialize-textarea"></textarea>
	          	<label for="first_name">รายละเอียดพระเครื่อง</label>
	        </div>
      	</div>
    </form>
  </div>


@stop
