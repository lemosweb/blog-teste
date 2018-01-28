@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container">
	
		<div class="container">
			<h4>Create Category</h4>
		</div>

		<div class="row">
			<div class="container">
				
				<form action="{{ route('categories.store') }}" method="post">
				  {!! csrf_field() !!}	
				  
				  <div class="form-group">

				    <label for="formGroupExampleInput">Name</label>
				    <input type="text" class="form-control" name="name" value="" placeholder="Nome da Categoria">

				  </div>

					<div class="right-align">
						<button type="submit" class="btn btn-primary">Create Category</button>
					</div>

				  
				 
				</form>

			</div>
		</div>

			
	
	</div>
</div>
@endsection