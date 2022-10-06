@extends('layouts.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="#">Home</a></li>
            <li><a href="{{ route('articles.index') }}">Articles</a></li>
            <li>Edit Article</li>
        </ol>
        <h2>Edit Article</h2>
    </div>
</section>
<!-- ======= End Breadcrumbs ======= -->

<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12">
                <form action="/articles/{{ $article->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" required="required" name="title"
                            value="{{ $article->title }}">
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" class="form-control" required="required" name="content"
                            value="{{ $article->content }}">
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="image">Feature Image</label>
                        <input type="file" class="form-control" required="required" name="image"
                            value="{{ $article->featured_image }}">
                        <img width="150px"
                            src="{{ asset('storage/'.$article->featured_image) }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
