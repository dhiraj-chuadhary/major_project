@extends('layouts.master')

@section('title')
dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Admin Dashboard</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Name</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Donation</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dhiraj Chaudhary</td>
                                <td>Nepal</td>
                                <td>Birgunj</td>
                                <td>5000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection
