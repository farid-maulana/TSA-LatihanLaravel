@extends('layouts.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="#">Home</a></li>
            <li><a href="{{ route('articles.index') }}">Articles</a></li>
            <li>New Article</li>
        </ol>
        <h2>Create New Article</h2>
    </div>
</section>
<!-- ======= End Breadcrumbs ======= -->

<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12">
                <div class="container">
                    <form action="/articles" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title: </label>
                            <input type="text" class="form-control" required="required" name="title">
                            </br>
                            <label for="content">Content: </label>
                            <textarea type="text" class="form-control" required="required" name="content"></textarea>
                            </br>
                            <label for="image">Feature Image: </label>
                            <input type="file" class="form-control" required="required" name="image">
                            </br>
                            <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
