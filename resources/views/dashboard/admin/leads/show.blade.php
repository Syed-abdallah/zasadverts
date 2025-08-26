@extends('dashboard.layout.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Lead Details</h4>
                    <table class="table table-bordered">
                        <tr><th>ID</th><td>{{ $lead->id }}</td></tr>
                        <tr><th>First Name</th><td>{{ $lead->first_name }}</td></tr>
                        <tr><th>Email</th><td>{{ $lead->email }}</td></tr>
                        <tr><th>Phone</th><td>{{ $lead->phone }}</td></tr>
                        <tr><th>Services</th><td>{{ $lead->Services_Name__c }}</td></tr>
                        <tr><th>Products</th><td>{{ $lead->products }}</td></tr>
                        <tr><th>ASIN URL</th><td>{{ $lead->asin_url }}</td></tr>
                        <tr><th>Budget</th><td>{{ $lead->budget }}</td></tr>
                        <tr><th>Comments</th><td>{{ $lead->additional_comments }}</td></tr>
                        <tr><th>Created At</th><td>{{ $lead->created_at }}</td></tr>
                        <tr><th>Updated At</th><td>{{ $lead->updated_at }}</td></tr>
                    </table>
                    <a href="{{ route('leads.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
