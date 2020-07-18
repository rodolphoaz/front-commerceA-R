<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div
          class="banner_content d-md-flex justify-content-between align-items-center"
        >
          <div class="mb-3 mb-md-0">
            <h2> {{ $title }}</h2>
            <p class="text-justify">
                {{ $description }}
            </p>
          </div>
          <div class="page_link">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{route('contact')}}"> Encomenda Online</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->