@extends('layouts.app')

@section('content')

<div class="row">
  <div class="container col s11 right-align">       
      <a  href="{{ route('categories.create') }}" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>      
  </div>
</div>  


<div class="row">
	<div class="container">
	
		<h1>Categories</h1>

			<table class="striped">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th class="center-align">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                              <tr>

                                <td>{{ $category->name }}</td>
                            
                                <td class="right-align">
                                    
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