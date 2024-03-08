@props(['name', 'title', 'id', 'options', 'placeholder', 'selected', 'labelClass', 'selectClass'])

<div class="mb-3">
  <label for="{{ $id }}" class="{{ $labelClass ?? 'form-label' }}">{{ $title }}</label>
  <select class="{{ $selectClass ?? 'form-select' }}" name="{{ $name }}" id="{{ $id }}"
    @if (isset($placeholder)) placeholder="{{ $placeholder }}" @endif>
    @if (isset($options))
      @foreach ($options as $value => $option)
        <option value="{{ $value }}" @if (isset($selected) && $selected == $value) selected @endif>{{ $option }}
        </option>
      @endforeach
    @endif
  </select>
</div>
