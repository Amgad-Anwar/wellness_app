@props([
'label'=>'',
'class',
'options',
'class',
'placeholder',
'name',
'type'=>'object',
'key'=>'id',
'value'=>'name',
'selected'=>NULL,
'search'=>false,
])

<div class="form-group col-lg-12">
<!--begin::Label-->
<label>{{ $label }}</label>
<!--end::Label-->
<!--begin::Input-->
<select name="{{ $name }}" {{ $attributes }} data-control="select2" data-placeholder="{{ $placeholder }}" @if(!$search) data-hide-search="true" @endif class="select2 w-100">
    <option value="">{{ __('No Select') }}</option>
    @if($type=='object')
        @foreach($options as $option)
            <option @if($selected==$option->$key) selected="selected" @endif value="{{ $option->$key }}">{{ $option->$value }}</option>
        @endforeach
    @elseif($type=='reverse-array')
        @foreach($options as $key=>$value)
            <option @if($selected==$value) selected="selected" @endif value="{{ $value }}">{{ $key }}</option>
        @endforeach
    @else
        @foreach($options as $key=>$value)
            <option @if($selected==$key) selected="selected" @endif value="{{ $key }}">{{ $value }}</option>
        @endforeach
    @endif
</select>
<!--end::Input-->
</div>
