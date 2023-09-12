@extends('layouts.master')

@section('title', 'Blogs')

@section('content')
<!-- Blog Start -->
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Blogs</h1>
        </div>
    </div>
</div>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                @if($blogs->count() > 0)
                <div class="row g-5" id="blog_post">
                    @foreach($blogs as $blog)
                    <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="{{asset(getImageUrl($blog->image))}}" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4 text-capitalize">{{$blog->categories?->name}}</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}
                                    </small>
                                </div>
                                <h4 class="mb-3 text-capitalize">{{$blog->name}}</h4>
                                <p>{{strlen(strip_tags($blog->description)) > 100 ? substr(strip_tags($blog->description), 0, 100) . '...' : strip_tags($blog->description);}}</p>
                                <a class="text-uppercase" href="{{ route('blog-detail', ['uuid' => $blog->uuid]) }}">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-lg m-0">
                                {{ $blogs->appends(['category' => $filterCategory, 'keyword' => $keyword])->links('vendor.pagination.bootstrap-5') }}
                            </ul>
                        </nav>
                    </div>
                </div>
                @else
                <div class="row g-5">
                    No data found.
                </div>
                @endif
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <form action="{{ route('blogs') }}" method="GET" class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control p-3" placeholder="Keyword" value="{{ $keyword }}">
                        @if($filterCategory)
                        <input type="hidden" name="category" value="{{$filterCategory}}">
                        @endif
                        <button type="submit" class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </form>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4 d-flex justify-content-between">
                        <h3 class="mb-0">Categories</h3>
                        <a class="fw-semi-bold active-category" href="{{ route('blogs') }}">Clear All</a>
                    </div>
                    <div class="link-animated d-flex flex-column justify-content-start">
                        @foreach($categories as $category)
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2{{ $filterCategory == $category->slug ? ' active-category' : '' }}" href="/blogs?category={{ $category->slug }}{{ $keyword ? '&keyword=' . $keyword : '' }}">
                            <i class="bi bi-arrow-right me-2"></i> {{ $category->name }}
                        </a>
                        @endforeach
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Recent Post</h3>
                    </div>
                    @foreach($latestPosts as $post)
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset(getImageUrl($post->image))}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="{{ route('blog-detail', ['uuid' => $post->uuid]) }}" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0" style="width: -webkit-fill-available">{{$post->name}}
                        </a>
                    </div>
                    @endforeach
                </div>
                <!-- Recent Post End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection