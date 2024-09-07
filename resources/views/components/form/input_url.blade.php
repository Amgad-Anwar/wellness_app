@props([
'label'=>'',
'popover'=>'',
'type'=>'',
'name'=>'',
'value'=>'',
'isRequired'=>false,
])
<div class="form-group col-lg-12">
    <!--begin::Label-->
    <label>{{ $label }}@if($isRequired) <span class="text-red">*</span> @endif</label>
    <!--end::Label-->
    @if($popover)
    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="{{ $popover }}"></i>
    @endif
    <!--begin::Input-->
    <div class="input-group mb-3">
        <input type="{{ $type }}" name="{{ $name }}" class="form-control mb-3 mb-lg-0 @error($name) is-invalid @enderror" placeholder="{{ $label }}" value="{{ $value }}" />
        <span class="input-group-text" id="basic-addon2"><i class="lni lni-{{ str_replace('_link','',$name) }}"></i></span>
    </div>
    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <!--end::Input-->
</div>
