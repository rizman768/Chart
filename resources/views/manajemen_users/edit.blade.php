@extends('layouts.template')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Edit User</h3>
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
	    					<form action="/updateuser" method="POST">
	                            @csrf
	                            <input type="hidden" name="id" value="{{ $users->id }}">
	                         
	                            <input type="hidden" name="id" value="{{ $users->id }}">

	                             <div class="row">
	                                <div class="col-xs-12 col-sm-12 col-md-12">
	                                    <div class="form-group">
	                                        <strong>Full Name :</strong>
	                                        <input type="text" name="name" class="form-control" value="{{ $users->name }}"placeholder="Nama">
	                                    </div>
	                                </div>
	                                <div class="col-xs-12 col-sm-12 col-md-12">
	                                    <div class="form-group">
	                                        <strong>Email:</strong>
	                                        <input type="email" name="email" class="form-control" value="{{ $users->email }}" placeholder="Email">
	                                    </div>
	                                </div>
	                                <div class="col-xs-12 col-sm-12 col-md-12">
	                                    <div class="form-group">
	                                        <strong>Role Id:</strong>
	                                        <select class="form-control" name="role_id" >
                                            <option selected value="{{$users->role_id}}">{{$users->role->role }}</option>
							                @foreach ( $role as $r )
                                                <option value="{{$r->id}}">{{ $r->role }}</option>
                                            @endforeach
                                        </select>
	                                    </div>
	                                </div>
	                                <!-- <div class="col-xs-12 col-sm-12 col-md-12">
	                                    <div class="form-group">
	                                        <strong>Password :</strong>
	                                        <input type="password" name="password" class="form-control"  placeholder="Password">
	                                    </div>
	                                </div> -->
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