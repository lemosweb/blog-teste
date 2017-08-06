@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container">
	
		<h1>Create Category</h1>

		<div class="row">
			<div class="container">
				
				<form action="{{ route('categories.update', $category->id) }}" method="post">
				  {!! csrf_field() !!}	

				  <div class="form-group">
				    <label for="formGroupExampleInput">Name</label>
				    <input type="text" class="form-control" name="name" value="{{ $category->name }}" placeholder="Nome da Categoria">
				  </div>

				  <button type="submit" class="btn btn-primary">Criar Categoria</button>
				 
				</form>

			</div>
		</div>

			
	
	</div>
</div>
@endsection