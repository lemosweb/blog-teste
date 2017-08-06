@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container">
	
		<h1>Artigos</h1>

		<table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Categoria</th>
                            <th>SubCategoria</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                              <tr>

                                <td>{{ $article->titulo }}</td>
                                <td>{{ $article->autor }}</td>
                                <td>{{ $article->categoria }}</td>
                                <td>{{ $article->subcategoria }}</td>
                                <td>
                                    
                                    <a href="#" class="btn btn-default">Editar</a>
                                    <a href="#" class="btn btn-danger">Excluir</a>


                                </td>
                                
                              </tr>                          
                            @endforeach                        
                        </tbody>
                </table>
	
	</div>
</div>
@endsection