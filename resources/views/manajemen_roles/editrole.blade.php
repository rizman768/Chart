@extends('layouts.template')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Edit Role</h3>
							<div class="right">
								<a class="btn btn-outline-success" href="/manajemenrole">Back</a>
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
	    					<form action="/updaterole" method="POST">
	                            @csrf
	                            <input type="hidden" name="id" value="{{ $roles->id }}">
	                         
	                            <input type="hidden" name="id" value="{{ $roles->id }}">

	                             <div class="row">
	                                <div class="col-xs-12 col-sm-12 col-md-12">
	                                    <div class="form-group">
	                                        <strong>Role :</strong>
	                                        <input type="text" name="role" class="form-control" value="{{ $roles->role }}"placeholder="Role">
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