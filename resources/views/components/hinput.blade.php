@props([
    'id' => '',
    'placeholder' => '',
    'type' => '',
    'class' => '',
    'rgx' => '',
    'liop' => [],
    'kind' => '',
])


<fieldset class="frm-field {{ $class }}">
    <input class="frm-input w-full" type="{{ ($type != 'datalist' ? $type : 'text') }}" name="{{ $id }}" id="{{ $id }}"
        {{ $kind == 'unholy' ? '' : 'required' }} placeholder="" rgx='{{ $rgx }}'
        {{ $type == 'datalist' ? 'list="' . $id . '_list"' : '' }} />

    <label for="{{ $id }}" class="frm-label" for="test">{{ $placeholder }}</label>

    @if ($type == 'datalist')
        <datalist id="{{ $id }}_list">
            @foreach ($liop as $li)
                <option value="{{ $li }}">{{ $li }}</option>
            @endforeach
        </datalist>
    @endif
</fieldset>