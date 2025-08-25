@extends('dashboard.layout.layout')

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title text-light-emphasis">Front Portfolio</h4>
                            {{-- @can('create frontportfolio') --}}
                                <a href="{{ route('frontportfolio.create') }}" class="btn btn-success">Create Portfolio Item</a>
                            {{-- @endcan --}}
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="zero_config" class="table ">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($frontportfolios as $key => $frontportfolio)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                <img src="{{ asset($frontportfolio->image) }}" width="120">
                                            </td>
                                            <td>
                                                <a href="{{ route('frontportfolio.edit', $frontportfolio) }}" class="btn btn-success">Edit</a>
                                                <form action="{{ route('frontportfolio.destroy', $frontportfolio) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
@endsection
