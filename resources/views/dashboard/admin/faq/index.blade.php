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
                            <h4 class="card-title text-light-emphasis">FAQ's</h4>
                            {{-- @can('create faqs') --}}
                                <a href="{{ route('faqs.create') }}" class="btn btn-success">Create FAQ</a>
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
                                        <th>Question</th>
                                        <th>Answer Preview</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                

                                    @forelse ($faqs as $faq)
                            <tr>
                                <td>{{ $faq->question }}</td>
                              <td>
    @php
        preg_match('/<img[^>]*>/', $faq->answer, $matches);
        $image = $matches[0] ?? '';
        $textWithoutImage = preg_replace('/<img[^>]*>/', '', $faq->answer);
        $cleanText = strip_tags($textWithoutImage);
        $truncatedText = Str::limit($cleanText, 100);
    @endphp
    
    {!! $image !!} 
    {{ html_entity_decode($truncatedText) }} {{-- FIXED LINE --}}
</td>
                                <td>
                                    {{-- @can('edit faq') --}}
                                    <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-sm btn-info">
                                        <i class="icon-pencil"></i>
                                    </a>
                                    {{-- @else --}}
                                    {{-- <button class="btn btn-sm btn-info disabled" title="You don't have permission to edit">
                                        <i class="icon-pencil"></i>
                                    </button>
                                    @endcan --}}

                                    {{-- @can('delete faq') --}}
                                    <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                            <i class="icon-trash"></i>
                                        </button>
                                    </form>
                                    {{-- @endcan --}}
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
        <!-- order table -->

        <!-- multi-column ordering -->

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
@endsection
