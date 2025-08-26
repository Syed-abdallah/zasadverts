@extends('dashboard.layout.layout')

@section('title', 'Edit Video')
@section('content')
<div class="container-fluid" style="margin-top:20px; margin-bottom:20px;">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="my-3">Edit Video</h2>
                    <form action="{{ route('videos.update', $video->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="video">Replace Video</label>
                            @if($video->video)
                                <div class="mb-2">
                                    <video width="220" controls>
                                        <source src="{{ asset($video->video) }}" type="video/mp4">
                                    </video>
                                </div>
                            @endif
                            <input type="file" name="video" class="form-control">
                            <small class="text-muted">Leave blank if you don’t want to change the video.</small>
                            @error('video')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
