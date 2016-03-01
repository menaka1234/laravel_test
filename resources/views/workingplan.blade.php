<?php
if(DB::connection()->getDatabaseName())
{
   echo "Connected sucessfully to database ".DB::connection()->getDatabaseName().".";
}

?>
@extends('layouts.dashboard')
@section('page_heading','Working Plan')
@section('section')

 <div class="row">
	<div class="col-sm-12">
		@section ('cotable_panel_title','Working Hours Plan')
		@section ('cotable_panel_body')
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Date</th>
					<th>Start Time</th>
					<th>End Time</th>
					<th>Reset Details</th>
				</tr>
			</thead>
			<tbody>
				<tr class="success">
					<td> <div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Autoloaded Date" disabled>
                </div></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Start Time" disabled></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="End Time" disabled></td>
                    <td>@include('widgets.button', array('class'=>'danger', 'value'=>'Reset Details'))</td>
				</tr>
				
				<!--edited Tr-->
				<tr class="success">
					<td> <div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Autoloaded Date" disabled>
                </div></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Start Time" disabled></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="End Time" disabled></td>
                    <td>@include('widgets.button', array('class'=>'danger', 'value'=>'Reset Details'))</td>
				</tr>
				
				<!-- End Of edited Tr -->
				
				<!--edited Tr-->
				<tr class="success">
					<td> <div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Autoloaded Date" disabled>
                </div></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Start Time" disabled></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="End Time" disabled></td>
                    <td>@include('widgets.button', array('class'=>'danger', 'value'=>'Reset Details'))</td>
				</tr>
				
				<!-- End Of edited Tr -->
				
				<!--edited Tr-->
				<tr class="success">
					<td> <div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Autoloaded Date" disabled>
                </div></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Start Time" disabled></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="End Time" disabled></td>
                    <td>@include('widgets.button', array('class'=>'danger', 'value'=>'Reset Details'))</td>
				</tr>
				
				<!-- End Of edited Tr -->
				
				<!--edited Tr-->
				<tr class="success">
					<td> <div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Autoloaded Date" disabled>
                </div></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Start Time" disabled></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="End Time" disabled></td>
                    <td>@include('widgets.button', array('class'=>'danger', 'value'=>'Reset Details'))</td>
				</tr>
				
				<!-- End Of edited Tr -->
				
				<!--edited Tr-->
				<tr class="success">
					<td> <div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Autoloaded Date" disabled>
                </div></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Start Time" disabled></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="End Time" disabled></td>
                    <td>@include('widgets.button', array('class'=>'danger', 'value'=>'Reset Details'))</td>
				</tr>
				
				<!-- End Of edited Tr -->
				
				<!--edited Tr-->
				<tr class="success">
					<td> <div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Autoloaded Date" disabled>
                </div></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Start Time" disabled></td>
					<td><div class="form-group">
                    <input class="form-control" id="disabledInput" type="text" placeholder="End Time" disabled></td>
                    <td>@include('widgets.button', array('class'=>'danger', 'value'=>'Reset Details'))</td>
				</tr>
				
				<!-- End Of edited Tr -->	
				
			</tbody>
			
		</table>
		@include('widgets.button', array('class'=>'primary', 'size'=>'lg btn-block', 'value'=>'Submit My working Plan'))
		
				
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
	</div>
	
	@foreach($data as $user)
	
	<h3>{{$user->No }}</h3>
	@foreach 
	
	
</div>          
                      
                                            
           
            
@stop