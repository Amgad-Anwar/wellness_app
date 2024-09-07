@props([
'imageFullDir'=>'',
'accept'=>'.png, .jpg, .jpeg',
'label'=>__('Avatar'),
'name'=>'avatar'
])

<div class="form-group col-lg-12 text-center">
    <label>{{ $label }}</label>
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' class="imageUpload" name="{{ $name }}" :accept="$accept" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url('@if(isset($user)&&$user->image_dir){{ asset($user->image_dir.$user->image) }}@else{{ asset('images/110x110.png') }}@endif');">
            </div>
        </div>
    </div>
</div>
