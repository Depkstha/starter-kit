@props(['name', 'title', 'type', 'id', 'placeholder', 'required', 'dataAttributes', 'labelClass', 'inputClass'])

<label for="{{ $id }}" class="{{ $labelClass ?? 'form-label' }}">{{ $title }}</label>
<input type="{{ $type }}" class="{{ $inputClass ?? 'form-control' }}" name="{{ $name }}"
  id="{{ $id }}" @if (isset($placeholder)) placeholder="{{ $placeholder }}" @endif
  @if (isset($required) && $required) required @endif
  @if (isset($dataAttributes)) @foreach ($dataAttributes as $key => $value)
                data-{{ $key }}="{{ $value }}"
            @endforeach @endif>
