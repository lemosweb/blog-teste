@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container">
	
		<h1>Subcategorias</h1>

			<table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($subcategories as $subcategory)
                              <tr>

                                <td>{{ $subcategory->name }}</td>
                                
                                <td>{{ $subcategory->category }}</td>
                            
                                <td>
                                    
                                    <a href="{{ route('subcategories.edit', $subcategory->id ) }}" class="btn btn-default">Editar</a>
                                    <a href="{{ route('subcategories.destroy', $subcategory->id ) }}" class="btn btn-danger">Excluir</a>

                                </td>
                                
                              </tr>                          
                            @endforeach                        
                        </tbody>
                </table>
	
	</div>
</div>
@endsection