@extends('dashboard.layout.layout')

@section('title', 'Edit Testinomial Images')
@section('content')

    <div class="container-fluid" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="my-3">Edit Testinomial Images</h2>
                        <div class="form-validation">
                            <form action="{{ route('testinomialimages.update', $testinomialimage->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Image Upload -->
                                <div class="form-group">
                                    <label for="image">Portfolio Image</label>
                                    
                                    <!-- Show current image -->
                            @if($testinomialimage->image)
                                        <div class="mb-2">
                                            <img src="{{ asset($testinomialimage->image) }}" 
                                                 alt="Current Image" width="150" 
                                                 style="border:1px solid #ccc; padding:3px;">
                                        </div>
                                    @endif

                                    <input type="file" name="image" class="form-control">
                                    <small class="text-muted">Leave blank if you don’t want to change the image.</small>

                                    @error('image')
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
    </div>
@endsection
