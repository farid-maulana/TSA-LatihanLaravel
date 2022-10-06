@extends('layouts.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="#">Home</a></li>
            <li>Articles</li>
        </ol>
        <h2>Our Articles</h2>
    </div>
</section>
<!-- ======= End Breadcrumbs ======= -->

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12">
                <div class="mb-3">
                    <a href="{{ route('cetak_pdf') }}" class="btn btn-success">Cetak PDF</a>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Gambar</th>
                    </tr>
                    @foreach($articles as $article)
                        <tr>
                            <td>
                                <a href="{{ route('articles.edit', $article->id) }}">
                                    {{ $article->title }}
                                </a>
                            </td>
                            <td>{{ $article->content }}</td>
                            <td>
                                <img width="150px"
                                    src="{{ asset('storage/'.$article->featured_image) }}">
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
