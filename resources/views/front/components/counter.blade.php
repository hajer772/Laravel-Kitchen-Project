    <!-- Start Counters -->
    <section id="counters" class="bg-counters">
        <div class="container">
            <div class="row align-items-center text-center">

                @php
                    $count = 0;
                @endphp
                @foreach ($counters as $counter)
                    @php
                        $count++;
                    @endphp
                   
                    @if ($count === 2 )
                        <div class="col-lg-4 col-md-4 py-5 py-md-0">
                            <p class="center-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris
                                arcu,
                                lobortis id interdum vitae, interdum eget elit. </p>
                        </div>
                    @endif
                    <div class="col-lg-4 col-md-4 {{ $count===2 ? 'col-sm-4 bottom10':'' }}">
                        <div class="counters">
                            <h2 class="count">{{ $counter->number }}</h2>
                            <h4>{{ $counter->title }}</h4>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Counters -->
