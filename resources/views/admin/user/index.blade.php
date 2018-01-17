@extends('layouts.app')

@section('content')
<div class="row">
	<div class="container">

		<h1>Users</h1>

		<table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>email</th>                            
                            <th>Role</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                              <tr>
                              
                                <td>teste</td>
                                <td>teste</td>                                
                                <td>teste</td>
                                <td>

                                    <a href="#">Edit</a>
                                    <a href="#">Delete</a>


                                </td>

                              </tr>
                            
                        </tbody>
                </table>

	</div>
</div>
@endsection
