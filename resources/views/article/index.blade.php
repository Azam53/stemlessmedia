<!--<!DOCTYPE html>
<html>
<head>
	<title>Article Lists</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
	<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
</head>
<body>

<div class="container">
	<h1>Add Article</h1>

	@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
        Session::forget('success');
        @endphp
    </div>
    @endif

	<form action="{{ url('article') }}" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label>Title:</label>
			<input type="text" name="title" class="form-control" placeholder="Title">
			@if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('<title></title>') }}</span>
            @endif
		</div>

		<div class="form-group">
			<strong>Body:</strong>
			<textarea class="form-control" name="content" placeholder="Body"></textarea>
			@if ($errors->has('body'))
                <span class="text-danger">{{ $errors->first('body') }}</span>
            @endif
		</div>

		<div class="form-group">
			<label>Tags:</label>
			<br/>
			<input data-role="tagsinput" type="text" name="tags" >
			@if ($errors->has('tags'))
                <span class="text-danger">{{ $errors->first('tags') }}</span>
            @endif
		</div>		

		<div class="form-group">
			<button class="btn btn-success btn-submit">Submit</button>
		</div>
	</form>

	<h1>Article Lists</h1>
	@if($articles->count())
		@foreach($articles as $key => $article)
			<h3>{{ $article->title }}</h3>
			<p>{{ $article->content }}</p>
			<div>
				<strong>Tag:</strong>
				@foreach($article->tags as $tag)
					<label class="label label-info">{{ $tag->name }}</label>
				@endforeach
			</div>
		@endforeach
	@endif
</div>

</body>
</html>-->
<!--<!DOCTYPE html>
<html>
<head>
	<title>Article Lists</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
	<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
</head>
<body>

<div class="container">
	<h1>Add Article</h1>

	@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
        Session::forget('success');
        @endphp
    </div>
    @endif

	<form action="{{ url('article') }}" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label>Title:</label>
			<input type="text" name="title" class="form-control" placeholder="Title">
			@if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('<title></title>') }}</span>
            @endif
		</div>

		<div class="form-group">
			<strong>Body:</strong>
			<textarea class="form-control" name="content" placeholder="Body"></textarea>
			@if ($errors->has('body'))
                <span class="text-danger">{{ $errors->first('body') }}</span>
            @endif
		</div>

		<div class="form-group">
			<label>Tags:</label>
			<br/>
			<input data-role="tagsinput" type="text" name="tags" >
			@if ($errors->has('tags'))
                <span class="text-danger">{{ $errors->first('tags') }}</span>
            @endif
		</div>		

		<div class="form-group">
			<button class="btn btn-success btn-submit">Submit</button>
		</div>
	</form>

	
</div>

</body>
</html>-->
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
        
     <div class="left ">
        <ul>
            <a href="#">
                <li class="item-menu">
                    <span class="glyphicon glyphicon-home"></span> 
                    <span class="menu">Dashboard</span>
                </li>
            </a> 
            <a href="{{ url('/article') }}">
                <li class="item-menu">
                    <span class="glyphicon glyphicon-book"></span> 
                    <span class="menu">View Blog</span>
                </li>
            </a>
            <a href="{{ url('article/create') }}">
                <li class="item-menu">
                    <span class="glyphicon glyphicon-pencil"></span> 
                    <span class="menu">Add Blog</span>
                </li>
            </a>    
            <a href="{{ url('/article/1') }}">
                <li class="item-menu">
                    <span class="glyphicon glyphicon-list"></span> 
                    <span class="menu">Manage Blog</span>
                </li>
            </a> 
            <!--<li class="item-menu"> 
                 <span class="glyphicon glyphicon-search"></span> 
                 <input class="t_search" type="text" placeholder="Search">
            </li>-->
        </ul>
     </div> <!-- end left-->
     <div class="col-lg-12" style="padding-left:70px;">
          <h1>My Article</h1>
	   
	@if(Session::has('success'))
	    <div class="alert alert-success">
		{{ Session::get('success') }}
		@php
		Session::forget('success');
		@endphp
	    </div>
	    @endif
           @if($articles->count())
		@foreach($articles as $key => $article)
			<h3>{{ $article->title }}</h3>
			<p>{!! $article->content !!}</p>
			<div>
				<strong>Tag:</strong>
				@foreach($article->tags as $tag)
					<label class="label label-info">{{ $tag->name }}</label>
				@endforeach
			</div>
		@endforeach
	@endif

	
     </div>
  </div>
</div>
@endsection


