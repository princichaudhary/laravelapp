<!-- extending code stored in app/resources/views/layouts/app.blade.php file-->
@extends('layouts.app')
@section('title')
 Hotel List
@stop
<!-- content section -->
@section('content') 
  <div class="container">
        <div class="row pagecommon">
            <div class="col-md-8 col-md-offset-2">
                <div class="wrapper">
                    <div class="product_main">
                        <div class="product">
                            <div class="inner">
                                <div class="col-md-4">
                                    <div class="item_comments_header">
                                        <h2><span class="label label-default center-block">{{ $hotelname->hotelname }}</span></h3>
                                    </div>
                                    @if($hotelname->img=='')
                                        <img class="img-circle" 
                                        src="{{asset('/image/noimage.jpg')}}"
                                        alt="Generic placeholder image" width="200" height="200">
                                    @else
                                        <img class="img-circle" 
                                        src="{{asset('/image/hotel/')}}/{{$hotelname->img}}"
                                        alt="Generic placeholder image" width="200" height="200">
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <div class="item_comment_form">
                                        <?php $count = 0;?>
                                        <!--Display all comments -->
                                        @foreach ($comments as $comment)
                                            <!--count comments -->
                                            <?php $count++;?>
                                            <div class="bs-example" data-example-id="simple-alerts"> 
                                                <div class="alert alert-success" role="alert">
                                                    {{ $comment->description }}
                                                </div>
                                            </div>
                                        @endforeach
                                        <!--display no of comments -->
                                        <h2 class="comment_count">{{$count}} Comments</h2>
                                        <!--if user loggedin then post the comment form -->
                                        @if (Auth::check())
                                             <!--Add comment -->
                                            <br/>
                                            {!! Form::open(array('url' => 'comment', 'method' => 'post')) !!}
                                            {!! form::textarea('body', null, ['class' => 'form-control']) !!}
                                            <br/>
                                            {!! Form::Submit('Post Comment', ['class' => 'btn btn-primary form-control']) !!}
                                            {!! Form::hidden('hotel_id', $hotelid) !!}
                                            {!! Form::close() !!}
                                            <br/>
                                        @else
                                            <!--login link -->
                                            <p>Please <a href = "{{ url('/login') }}">Login</a> to post a comment</p>
                                        @endif
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<!-- /content section -->
@endsection