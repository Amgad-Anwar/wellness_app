@props([
'type'=>'text',
'isRequired'=>false,
'label'=>'',
'value'=>'',
'name'=>'',
'placeholder'=>'',
'popover'=>'',
'id'=>'',
])

<div class="form-group col-lg-12">
    <!--begin::Label-->
    <label>{{ $label }}@if($isRequired) <span class="text-red">*</span> @endif</label>
    <!--end::Label-->
    @if($popover)
        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="{{ $popover }}"></i>
    @endif
    <!--begin::Input-->
    <input type="{{ $type }}" name="{{ $name }}" id="{{ ($id??$name) }}" class="form-control @error((str_contains($name,'[')?str_replace('[','.',str_replace(']','',$name)):$name)) is-invalid @enderror" placeholder="{{ $placeholder }}" value="{{ old($name)??$value }}" />
    @error((str_contains($name,'[')?str_replace('[','.',str_replace(']','',$name)):$name))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <!--end::Input-->
</div>
