@extends('layouts.app')

@section('content')

    <link href="{!! asset('css/comment.css') !!}" media="all" rel="stylesheet" type="text/css" />
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>



            </div>
        </div>





        <form class="form-horizontal" role="form" method="GET"  action="./post/makePost" >
           {{-- {!! csrf_field() !!}--}}
            {{--action="./post/makePost">--}}
            {{--action="{{ url('/makePost') }}"--}}

            <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="4" name="message"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="human" class="col-sm-2 control-label">{{$var1}} + {{$var2}} = ?</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <! Will be used to display an alert to the user>
                </div>
            </div>

        </form>







        @foreach($posts as $post)

        <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-white post panel-shadow">
                    <div class="post-heading">
                        <div class="pull-left image">

                            <img src=" {{$post->image}} " class="img-circle avatar" alt="user profile image">
                        </div>
                        <div class="pull-left meta">

                            <div class="title h5">
                                <a href="#"><b>{{$post->name}}</b></a>
                                <br>made a post.
                            </div>
                        </div>
                    </div>
                    <div class="post-description">
                        <p>{{$post->post}}</p>
                        <div class="stats">
                            <a href="#" class="btn btn-default stat-item">
                                <i class="fa fa-thumbs-up icon"></i>{{$post->ups}}
                            </a>
                            <a href="#" class="btn btn-default stat-item">
                                <i class="fa fa-thumbs-down icon"></i>{{$post->downs}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach



    </div>

















</div>
@endsection
