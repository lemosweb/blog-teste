@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container">

		<h1>Articles</h1>

		<table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>SubCategory</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                              <tr>

                                <td>{{ $article->title }}</td>
                                <td>{{ $article->autor }}</td>
                                <td>{{ $article->categoria }}</td>
                                <td>{{ $article->subcategoria }}</td>
                                <td>

                                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-default">Edit</a>
                                    <a href="{{ route('articles.destroy', $article->id) }}" class="btn btn-danger">Delete</a>


                                </td>

                              </tr>
                            @endforeach
                        </tbody>
                </table>

	</div>
</div>
@endsection
