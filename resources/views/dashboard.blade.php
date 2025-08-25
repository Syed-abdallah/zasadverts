@extends('dashboard.layout.layout')

@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Quick Stats -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="card bg-primary text-white shadow">
                <div class="card-body">
                    <h5 class="mb-2">Total Clients</h5>
                    <h3>128</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card bg-success text-white shadow">
                <div class="card-body">
                    <h5 class="mb-2">Active Projects</h5>
                    <h3>34</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card bg-warning text-dark shadow">
                <div class="card-body">
                    <h5 class="mb-2">Monthly Revenue</h5>
                    <h3>$12,450</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card bg-info text-white shadow">
                <div class="card-body">
                    <h5 class="mb-2">Team Members</h5>
                    <h3>15</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Recent Projects -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Recent Projects</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Website Redesign - <span class="text-success">Completed</span></li>
                        <li class="list-group-item">Social Media Campaign - <span class="text-warning">In Progress</span></li>
                        <li class="list-group-item">Mobile App Development - <span class="text-info">Ongoing</span></li>
                        <li class="list-group-item">SEO Optimization - <span class="text-danger">Pending</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- New Clients -->
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">New Clients</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Acme Corp <span class="badge bg-success float-end">Premium</span></li>
                        <li class="list-group-item">TechNova <span class="badge bg-primary float-end">Standard</span></li>
                        <li class="list-group-item">BrightEdge <span class="badge bg-warning float-end">Basic</span></li>
                        <li class="list-group-item">Marketify <span class="badge bg-success float-end">Premium</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Team Updates -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Team Updates</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Member</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Last Activity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sarah Johnson</td>
                                <td>Project Manager</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>2 hrs ago</td>
                            </tr>
                            <tr>
                                <td>David Lee</td>
                                <td>Designer</td>
                                <td><span class="badge bg-warning">Busy</span></td>
                                <td>5 hrs ago</td>
                            </tr>
                            <tr>
                                <td>Emily Brown</td>
                                <td>Developer</td>
                                <td><span class="badge bg-danger">Offline</span></td>
                                <td>Yesterday</td>
                            </tr>
                            <tr>
                                <td>Michael Green</td>
                                <td>SEO Specialist</td>
                                <td><span class="badge bg-info">On Task</span></td>
                                <td>30 mins ago</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
