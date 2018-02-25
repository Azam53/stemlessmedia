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
            <a href="{{ url('/article') }}">
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
          <h1>Edit Article</h1>

	@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
        Session::forget('success');
        @endphp
    </div>
    @endif

         {!! Form::model($article,array('method' => 'PUT','route' => ['article.update', $article->id], 'class' => 'form')) !!}


		{{ csrf_field() }}
		<div class="form-group">
			<label>Title:</label>
                 {!! Form::text('title', $article->title, array('required', 'class'=>'form-control', 'placeholder'=>'Title')) !!}
			@if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('<title></title>') }}</span>
            @endif
		</div>

		<div class="form-group">
			<strong>Body:</strong>
             {!! Form::textarea('content',$article->content, array('class'=>'form-control','id' =>'mytextarea' ,'placeholder'=>'Body')) !!}
			@if ($errors->has('body'))
                <span class="text-danger">{{ $errors->first('body') }}</span>
            @endif
		</div>

		<div class="form-group">
			<label>Tags:</label>
			<br/>
                        @foreach($article->tags as $tag)
			<label class="label label-info">{{ $tag->name }}</label>
		        @endforeach
		</div>		

		<div class="form-group">
                      {!! Form::submit('Save', array('class'=>'btn btn-success btn-submit')) !!}
			
		</div>
       {!! Form::close() !!}
     
     </div>
  </div>
</div>
@endsection

