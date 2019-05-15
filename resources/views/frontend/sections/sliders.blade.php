<section>
    <div id="carousel-indicators4" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators4">
            @for($i=0;$i<3;$i++)
            <li data-target="#carousel-indicators4" data-slide-to="{{ $i }}" class="{{ $i == 0? 'active':'' }}"></li>
            @endfor

        </ol>
        <div class="carousel-inner">
            @for($i=0;$i<3;$i++)
                <div class="carousel-item {{ $i == 0? 'active':'' }}">
                    <img class="d-block w-100" alt="" src="{{ asset('/assets/images/photos/slide'.'0'.'.jpg') }}" data-holder-rendered="true">
                </div>
            @endfor
        </div>
    </div>
</section>
