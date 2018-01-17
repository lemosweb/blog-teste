@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container">

		<h1>Create User</h1>

		<div class="row">
			<div class="container">

				<form action="{{ route('user.store') }}" method="post">
				  {!! csrf_field() !!}

				  <div class="form-group">

				    <label for="Name">Name</label>
				    <input  type="text" name="name" class="form-control"  placeholder="Name of User">

				  </div>

				  <div class="form-group">
				  	
					<label for="Email">Email</label>
				    <input  type="text" name="email" class="form-control"  placeholder="Email of User">	

				  </div>

				  <div class="form-group">
				  	
					<label for="Password">Password</label>
				    <input  type="password" name="password" class="form-control"  placeholder="type a password">	

				  </div>

				  <div class="form-group">
				  	
					<label for="Password">retype Password</label>
				    <input  type="password" name="retypepassword" class="form-control"  placeholder="retype a password">	

				  </div>

				  <div class="form-group">						

					<label for="Classify">Classify in</label>
					{!! Form::select('role', $role, null, ['class'=>'form-control']) !!}

				  </div>


  				</div>

				  <button type="submit" class="btn btn-primary">Create User</button>

				</form>

			</div>
		</div>



	</div>
</div>
@endsection
