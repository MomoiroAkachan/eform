@props([
    'id' => '',
    'placeholder' => '',
    'type' => '',
    'class' => '',
    'rgx' => '',
    'liop' => [],
])

@if ($type == 'datalist')
    <fieldset class="frm-field {{ $class }}">
        <input class="frm-input w-full" type="text" name="{{ $id }}" id="{{ $id }}" required placeholder="" rgx='{{ $rgx }}' list='{{ $id }}_list' />
        <label for="{{ $id }}" class="frm-label" for="test">{{ $placeholder }}</label>

        <datalist id="{{ $id }}_list">
            @foreach ( $liop as $li )
                <option value="{{ $li }}"/>
            @endforeach
        </datalist>
    </fieldset>
@else
    <fieldset class="frm-field {{ $class }}">
        <input class="frm-input w-full" type="{{ $type }}" name="{{ $id }}" id="{{ $id }}" required placeholder="" rgx='{{ $rgx }}' />
        <label for="{{ $id }}" class="frm-label" for="test">{{ $placeholder }}</label>
    </fieldset>
@endif