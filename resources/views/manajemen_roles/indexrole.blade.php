@extends('layouts.template')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Manajemen Role</h3>
							<div class="right">
								<button type="button" class="btn btn-default"><a class="btn btn-outline-success" href="/tambahrole"><i class="fa fa-plus-square"></i>Tambah Role</a> </button>
							</div>
						</div>
						<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>No</th>
												<th>ID</th>
												<th>Role</th>
												<th>Option</th>
											</tr>
										</thead>
										<tbody>
											<?php $i=0 ?>
											@foreach ( $roles as $role )
				                            <tr>
				                                <td>{{ ++$i }}</td>
				                                <td>{{ $role->id }}</td>
				                                <td>{{ $role->role }}</td>
				                                <td>
				                                    <form action="/deleterole/{{$role->id}}" method="POST">
				                                        <a class="btn btn-primary btn-sm" href="/editrole/{{$role->id}}">Edit</a>

				                                        @csrf

														<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
				                                    </form>
				                                </td>
				                            </tr>
				                            @endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
			</div>
		</div>
	</div>
@endsection