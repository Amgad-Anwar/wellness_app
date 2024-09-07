@props([
'type'=>'text',
'isRequired'=>false,
'label'=>'',
'value'=>'',
'name'=>'',
'placeholder'=>'',
'popover'=>'',
'isEditor'=>false,
])
{{ (is_array($value))?dd($value):'' }}
<div class="form-group col-lg-12">
    <!--begin::Label-->
    <label class="{{ $isRequired?'required':'' }} fw-bold fs-6 mb-2">{{ $label }}</label>
    <!--end::Label-->
    @if($popover)
        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="{{ $popover }}"></i>
    @endif
    <!--begin::Input-->
    <textarea name="{{ $name }}" id="{{ $name }}-{{ \Illuminate\Support\Str::random()  }}" class="form-control form-control-solid mb-3 mb-lg-0 {{ ($isEditor?'is-editor-class':'') }} @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}">{!! old($name)??$value !!}</textarea>
    @error($name)
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
    <!--end::Input-->
</div>
