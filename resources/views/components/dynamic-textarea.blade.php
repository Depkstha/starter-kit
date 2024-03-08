@props(['name', 'title', 'id', 'placeholder', 'rows', 'cols', 'labelClass', 'textareaClass'])

<label for="{{ $id }}" class="{{ $labelClass ?? 'form-label' }}">{{ $title }}</label>
<textarea class="{{ $textareaClass ?? 'form-control' }}" name="{{ $name }}" id="{{ $id }}"
  @if (isset($row)) rows="{{ $rows }}" @endif
  @if (isset($cols)) cols="{{ $cols }}" @endif
  @if (isset($placeholder)) placeholder="{{ $placeholder }}" @endif>
</textarea>
