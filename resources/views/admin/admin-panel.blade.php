@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
	          <div>
	            <a href="/register">Register User</a>
				<br />
	            <a href="">Request payment</a>
	          </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
