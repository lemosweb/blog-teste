@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container">
	
		<h1>Categorias</h1>

			<table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                              <tr>

                                <td>{{ $category->name }}</td>
                            
                                <td>
                                    
                                    <a href="{{ route('categories.edit', $category->id ) }}" class="btn btn-default">Editar</a>
                                    <a href="{{ route('categories.destroy', $category->id ) }}" class="btn btn-danger">Excluir</a>

                                </td>
                                
                              </tr>                          
                            @endforeach                        
                        </tbody>
                </table>
	
	</div>
</div>
@endsection