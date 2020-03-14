@extends('admin.layout')
@section('content')
<h1>Add student</h1>
@if(session()->has('message'))
<div class="alert alert-success">
	{{ session()->get('message') }}
</div>
@endif
<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="{{ url('add-student')}}" method="post" enctype="multipart/form-data">
				@csrf
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="">name </label>
						<div class="controls">
							<input type="text" class="" name="name" id="typeahead" >
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">roll </label>
						<div class="controls">
							<input type="text" class="" name="roll" id="typeahead" >
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">fathersname </label>
						<div class="controls">
							<input type="text" class="" name="fathersname" id="typeahead" >
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">mothersname </label>
						<div class="controls">
							<input type="text" class="" name="mothersname" id="typeahead" >
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">email </label>
						<div class="controls">
							<input type="email" class="" name="email" id="typeahead" >
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">phone </label>
						<div class="controls">
							<input type="text" class="" name="phone" id="typeahead" >
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">address </label>
						<div class="controls">
							<input type="text" class="" name="address" id="typeahead" >
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="fileInput">File input</label>
						<div class="controls">
							<div class="uploader" id="uniform-fileInput"><input class="input-file " id="fileInput" name="image" type="file"><span class="filename" style="user-select: none;">No file selected</span><span class="action" style="user-select: none;">Choose File</span></div>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">password </label>
						<div class="controls">
							<input type="password" class="" name="password" id="typeahead" >
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">department </label>
						<div class="controls">
							<select name="department">
								<option value="1">cse</option>
								<option value="2">bba</option>
								<option value="3">eee</option>
								<option value="4">ece</option>
							</select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">admissyear </label>
						<div class="controls">
							<input type="password" class="" name="admissyear" id="typeahead" >
						</div>
					</div>

					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Save changes</button>
						<button type="reset" class="btn">Cancel</button>
					</div>
				</fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div>
@endsection