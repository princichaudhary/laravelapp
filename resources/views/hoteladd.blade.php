<!-- extending code stored in app/resources/views/layouts/app.blade.php file-->
@extends('layouts.app')
@section('title')
 Add Hotel
@stop
<!-- content section -->
@section('content')
<div class="container">
    <div class="row pagecommon">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Add New Hotel</h4></div>
                <div class="panel-body">
                    <div class="row">
                        <!--Add Hotel form -->
                        <div class="col-md-12">
                            {!! Html::ul($errors->all(), array('class'=>'errors alert alert-danger')) !!}
                            {!! Form::open(array('url' => 'admin/','class'=>'form','method'=>'post','enctype'=>'multipart/form-data')) !!}
                            <br>{!! Form::label('name', 'Hotel Name') !!}
                            {!! Form::text('name', null, array('class' => 'form-control','placeholder' => 'e.g. Hilton')) !!}
                            <br>{!! Form::label('address', 'Address') !!}
                            {!! Form::textarea('address', null, array('class' => 'form-control','placeholder' => 'e.g. J-110,sector-32,Noida')) !!}
                            <br>{!! Form::label('price', 'Price') !!}
                            {!! Form::text('price', null, array('class' => 'form-control','placeholder' => 'e.g. 8000')) !!}
                            <br>{!! Form::label('image', 'Hotel Picture') !!}
                            {!! Form::file('theimage', array('class' => 'form-control')) !!}
                            <br>
                            {!! Form::submit('Add' , array('class' => 'btn btn-primary center-block')) !!}
                            {!! Form::close() !!}
                            <br>
                        </div>
                        <!--/Add Hotel form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /content section -->
@endsection