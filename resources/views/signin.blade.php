@extends ('layouts.dashboard')
@section('page_heading','Signin')


@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
        <form role="form">
            
            <div class="form-group">
                <label>Enter your First Name</label>
                <input class="form-control" placeholder="Menaka">
            </div>
            
             <div class="form-group">
                <label>Enter your Last Name</label>
                <input class="form-control" placeholder="Nanayakkara">
            </div>
            
              <div class="form-group">
                <label>Enter your Birthdate</label>
                <input class="form-control" placeholder="I will add a date picker through java script">
            </div>
            
              <div class="form-group">
                <label>Gender</label>
                <select class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                    
                </select>
            </div>
             <div class="form-group">
                    <label for="disabledSelect">Enter your Address</label>
                    <input class="form-control" id="disabledInput" type="text" placeholder="I will validate the exact adress Here" disabled>
                    <br>
                    @include('widgets.collapse', array('id'=>'1', 'class'=>'primary', 'header'=> 'Is Your Address Correct ?', 'body'=>'If your address displayed here is not correct please click on the "validate your address" button and locate yourself in the google maps','collapseIn'=>true))
                    @include('widgets.button', array('class'=>'primary', 'value'=>'validate Your Address'))
                </div>
                
                  <div class="form-group">
                <label>Looking For A Job Of</label>
                <select class="form-control">
                    <option>Cleaner</option>
                    <option>Sweeper</option>
                    <option>Other</option>
                    
                </select>
            </div>
               <div class="form-group">
                <label>Enter your emai address</label>
                <input class="form-control" placeholder="menaka2nanayakkara@gmail.com">
            </div>
               
                <div class="form-group">
                <label>Upload Your Photo</label>
                <input type="file">
            </div>
                @include('widgets.button', array('class'=>'primary', 'size'=>'lg btn-block', 'value'=>'Complete Your Signup'))
               <!-- Once clicked on to the "complete your registration button the user will be automatically sent to a page to update his or her working time table -->
        </form>
        <br>
        <p>For more details, please visit <a href="http://www.nalakananayakkara.com">Frequently Asked Questions</a>.</p>
    </div>
</div>
</div>
@stop