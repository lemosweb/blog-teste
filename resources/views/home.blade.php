@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <ul>Go to:
                    	<li><a href="{{ route('categories.index') }}">Categories</a></li>
                    	<li><a href="{{ route('subcategories.index') }}">Sub Categories</a></li>	
                    	<li><a href="{{ route('articles.index')}}">Articles</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
