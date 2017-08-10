@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container">

		<h1>Edit Article</h1>

		<div class="row">
			<div class="container">

				{!! Form::model($article, ['route' => ['article.update', $article->id]])	!!}

				  @include('admin.article.articleform')

				  <button type="submit" class="btn btn-primary">Update</button>

				{{ Form::close() }}

			</div>
		</div>



	</div>
</div>
@endsection
