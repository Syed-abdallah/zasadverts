@extends('dashboard.layout.layout')

@section('title', 'Create Testinomial Images')
@section('content')

    <div class="container-fluid" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="my-3">Create Testinomial Images</h2>
                        <div class="form-validation">
                            <form action="{{ route('testinomialimages.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- Image Upload Field -->
                                <div class="form-group">
                                    <label for="image">Upload Image</label>
                                    <input type="file" name="image" class="form-control" value="{{ old('image') }}" required>
                                    @error('image')
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
    </div>
@endsection
