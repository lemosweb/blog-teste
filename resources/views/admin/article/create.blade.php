@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container">

		<h1>Create Article</h1>

		<div class="row">
			<div class="container">

				<form action="{{ route('articles.store') }}" method="post">
				  {!! csrf_field() !!}

				  <div class="form-group">

				    <label for="Title">Title</label>
				    <input  type="text" name="title" class="form-control"  placeholder="Title of Article">

				  </div>

					<div class="form-group">

						<div class="col col-sm-6">

							<label for="Classify">Classify in</label>
							{!! Form::select('sub_category_id', $subcategories, null, ['class'=>'form-control']) !!}

						</div>

						<div class="col col-sm-6">

							<label for="Relevance">Relevance</label>
							{!! Form::select('relevance', $relevance, null, ['class'=>'form-control']) !!}

						</div>

					</div>



					<div class="form-group">

				    <label for="content">Content</label>
				    <textarea name="content" class="form-control" id="exampleTextarea" rows="15"></textarea>

  				</div>

				  <button type="submit" class="btn btn-primary">Create Article</button>

				</form>

			</div>
		</div>



	</div>
</div>
@endsection
