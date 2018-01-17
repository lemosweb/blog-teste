@extends('layouts.app')

@section('content')
<div class="row">
  <div class="container">
      <a href="{{ route('categories.create') }}" class="button">Create Category</a>
  </div>
</div>

<div class="row">
	<div class="container">
	
		<h1>Categories</h1>

			<table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                              <tr>

                                <td>{{ $category->name }}</td>
                            
                                <td>
                                    
                                    <a href="{{ route('categories.edit', $category->id ) }}" class="btn btn-default">Edit</a>
                                    <a href="{{ route('categories.destroy', $category->id ) }}" class="btn btn-danger">Delete</a>

                                </td>
                                
                              </tr>                          
                            @endforeach                        
                        </tbody>
                </table>
	
	</div>
</div>
@endsection