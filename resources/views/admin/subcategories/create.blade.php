@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container">
	
		<h1>Criar Subcategoria</h1>

		<div class="row">
			<div class="container">
				
				<form action="{{ route('subcategories.store') }}" method="post">
				  {!! csrf_field() !!}	

				  <div class="form-group">
				  	<select name="category_id" class="form-control">
					  	@foreach($categories as $id => $name)	
						  <option value="{{ $id }}">{{ $name }}</option>
						@endforeach  					  
				  	</select>
				  </div>

				  <div class="form-group">
				    <label for="formGroupExampleInput">Name</label>
				    <input type="text" class="form-control" name="name" placeholder="Nome da Categoria">
				  </div>



				
				  <button type="submit" class="btn btn-primary">Criar SubCategoria</button>
				 
				</form>

			</div>
		</div>

			
	
	</div>
</div>
@endsection