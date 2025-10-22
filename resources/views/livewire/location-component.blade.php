<div>
    <div class="dropdown @if($location) open @endif">
        <input type="text" wire:model="location" name="{{ $name }}" class="form-control inputElement" id="{{ $name }}" placeholder="{{ $placeholder }}"
               autocomplete="off">
        <div class="ico"><img src="{{ asset('assets/front/img/location-ico.svg') }}" alt=""></div>


        <div class="dropdown-options">
            @if($results)
                @foreach($results as $result)
                    <div class="option" data-value="{{ $result->province }}, {{ $result->state_code }}, {{ $result->zipcode }}">{{ $result->province }}, {{ $result->state_code }}, {{ $result->zipcode }}</div>
                @endforeach
            @endif
        </div>
    </div>
</div>
