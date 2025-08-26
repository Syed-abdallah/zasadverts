@extends('dashboard.layout.layout')

@section('title', 'Add Video')
@section('content')
<div class="container-fluid" style="margin-top:20px; margin-bottom:20px;">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="my-3">Add Video</h2>
                    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="video">Upload Video</label>
                            <input type="file" name="video" class="form-control" required>
                            @error('video')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
