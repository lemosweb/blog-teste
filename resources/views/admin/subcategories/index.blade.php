@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container">
	
		<h1>Subcategories</h1>

			<table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($subcategories as $subcategory)
                              <tr>

                                <td>{{ $subcategory->name }}</td>
                                
                                <td>{{ $subcategory->category }}</td>
                            
                                <td>
                                    
                                    <a href="{{ route('subcategories.edit', $subcategory->id ) }}" class="btn btn-default">Edit</a>
                                    <a href="{{ route('subcategories.destroy', $subcategory->id ) }}" class="btn btn-danger">Delete</a>

                                </td>
                                
                              </tr>                          
                            @endforeach                        
                        </tbody>
                </table>
	
	</div>
</div>
@endsection