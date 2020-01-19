@if ($showLabel && $showField)
    @if ($options['wrapper'] !== false)
        <div {!! $options['wrapperAttrs'] !!} >
            @endif
            @endif
            @if ($showLabel && $options['label'] !== false && $options['label_show'])
                {!! Form::customLabel(__($name), __($options['label']), $options['label_attr']) !!}
            @endif
            <div class="col-md-6 col-sm-6 ">
                <div class="custom-file">
                    {!! Form::text($name, $options['value'], $options['attr']) !!}
                    {!! Form::customLabel(__("Selecione Uma Imagem"), $options['value'],$options['label_attr_addon']) !!}
                </div>
                @include('laravel-form-builder::errors')
                @include('laravel-form-builder::help_block')
            </div>
            @if ($showLabel && $showField)
                @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif

@push('scripts')
    <script src="{{ asset('_dist/admin/js/file-btn.js') }}"></script>
@endpush

