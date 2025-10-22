<div id="destinations">
    <div class="container-xl">
        <div class="destinations">
            <div class="section-title">
                <h3>Choose Your State</h3>
                <p>Select your state for more information and carrier availability in your area.</p>
            </div>
            @if(count($destinationList))
                <div class="destinations-list">
                    @foreach($destinationList as $k => $v)
                        <div class="destination">
                            <a href="{{ route('destination.show', ['slug' => $v]) }}">
                                <img src="{{ asset('assets/front/img/flags/') }}/{{ $v }}.png" data-src="{{ asset('assets/front/img/flags/') }}/{{ $v }}.png" alt="">
                                {{ $k }}
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="div">
                    <span class="show-more">+ More States</span>
                </div>
            @endif
        </div>
    </div>
</div>
