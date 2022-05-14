<section id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp">
                <div class="section-title">
                    <span class="title-bg">Services</span>
                    <h1>What we provide</h1>
                    <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin<p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="service-slider">
                    @foreach($service as $services)
                    <!-- Single Service -->
                    <div class="single-service">
                        {!! $services->icon !!}
                        <h2><a href="service-single.html">{{$services->service}} </a></h2>
                        <p>{{$services->service_desc}} </p>
                    </div>
                    <!-- End Single Service -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>