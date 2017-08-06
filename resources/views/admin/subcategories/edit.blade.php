@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container">
	
		<h1>Edit Subcategory</h1>

		<div class="row">
			<div class="container">			
				

				{!! Form::model($subcategory, ['route' => ['subcategories.update', $subcategory->id]])	!!}			

				  <div class="form-group">




				  	{!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
				  	
				  </div>

				  <div class="form-group">
				    <label for="form, [$categories]GroupExampleInput">Name</label>
				    <input type="text" class="form-control" name="name" value="{{ $subcategory->name }}" placeholder="Nome da Categoria">
				  </div>

				  <button type="submit" class="btn btn-primary">Update</button>
				 
				{!! Form::close() !!}

			</div>
		</div>

			
	
	</div>
</div>
@endsection