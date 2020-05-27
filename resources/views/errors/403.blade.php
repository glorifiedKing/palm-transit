@extends('bustravel::frontend.layouts.app')
@section('title', 'Unauthorized access')
@section('page-heading','Bus Ticketing System')    


            @section('content')
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="h3 mb-3 font-weight-normal">Un Authorized access!</h1>
                        <div class="alert alert-danger" role="alert">
			  <strong>Error!</strong> Access to this resource is not Authorized. Contact Administrator
			</div>
                       
                    </div>
                </div>
                @endsection
