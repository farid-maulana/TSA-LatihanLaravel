<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Web Design</li>
            <li data-filter=".filter-card">Web App</li>
            <li data-filter=".filter-web">Mobile App</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($portfolios as $portfolio)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img
                            src="{{ asset('assets/img/portfolio/' . $portfolio->image) }}"
                            class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>{{ $portfolio->name }}</h4>
                        <p>{{ $portfolio->category }}</p>
                        <a href="{{ asset('assets/img/portfolio/' . $portfolio->image) }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                            title="{{ $portfolio->name }}"><i class="bx bx-plus"></i></a>
                        <a href="{{ route('portfolios.show', $portfolio->id) }}"
                            class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
