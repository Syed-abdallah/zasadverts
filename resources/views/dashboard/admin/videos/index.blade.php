@extends('dashboard.layout.layout')

@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title text-light-emphasis">Video Section</h4>
                       
                                @if($videos->count() < 4)
                                    <a href="{{ route('videos.create') }}" class="btn btn-success">Add Video</a>
                                @endif
                       
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table id="zero_config" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Video Preview</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($videos as $video)
                                        <tr>
                                            <td>{{ $video->id }}</td>
                                            <td>
                                                <video width="200" controls>
                                                    <source src="{{ asset($video->video) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </td>
                                            <td>
                                                {{-- @can('edit video') --}}
                                                <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-sm btn-info">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                {{-- @endcan --}}

                                                @can('delete video')
                                                <form action="{{ route('videos.destroy', $video->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                        <i class="icon-trash"></i>
                                                    </button>
                                                </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @empty
                                 
                                    @endforelse
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
