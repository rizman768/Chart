@extends('layouts.template')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Tambah User</h3>
							<div class="right">
								<a class="btn btn-outline-success" href="/manajemenuser">Back</a>
							</div>
						</div>
						<div class="panel-body">
							@if ($errors->any())
	                            <div class="alert alert-danger">
	                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
	                                <ul>
	                                    @foreach ($errors->all() as $error)
	                                        <li>{{ $error }}</li>
	                                    @endforeach
	                                </ul>
	                            </div>
	                        @endif
	                        
							<form action="/storetambahuser" method="POST">
                            @csrf
								<div class="row">
	                                <div class="col-xs-12 col-sm-12 col-md-12">
	                                    <div class="form-group">
	                                        <strong>Full Name :</strong>
	                                        <input type="text" name="nama" class="form-control" placeholder="Nama">
	                                    </div>
	                                </div>
	                                <div class="col-xs-12 col-sm-12 col-md-12">
	                                    <div class="form-group">
	                                        <strong>Email:</strong>
	                                        <input type="email" name="email" class="form-control" placeholder="Email">
	                                    </div>
	                                </div>
	                                <div class="col-xs-12 col-sm-12 col-md-12">
	                                    <div class="form-group">
	                                        <strong>Password :</strong>
	                                        <input type="password" name="password" class="form-control" placeholder="Password">
	                                    </div>
	                                </div>
	                                <div class="col-xs-12 col-sm-12 col-md-12">
	                                    <div class="form-group">
	                                        <strong>Role :</strong>
	                                        <select class="form-control" name="role_id" >
								                @foreach ( $role as $r )
	                                                <option value="{{$r->id}}">{{ $r->role }}</option>
	                                            @endforeach
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
	                                    <button type="submit" class="btn btn-primary">Submit</button>
	                                </div>
	                            </div>
							</form>
						</div>
					</div>
					<!-- END OVERVIEW -->
			</div>
		</div>
	</div>
@endsection