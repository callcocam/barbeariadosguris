@if ($showLabel && $showField)
    @if ($options['wrapper'] !== false)
        <div {!! $options['wrapperAttrs'] !!} >
            @endif
            @endif
            @if ($showLabel && $options['label'] !== false && $options['label_show'])
                {!! Form::customLabel(__($name), __($options['label']), $options['label_attr']) !!}
            @endif
            <div class="col-md-6 col-sm-6 ">
                <fieldset>
                    <div class="form-group">
                        <div class="tagBox"
                             data-no-duplicate="true"
                             data-pre-tags-separator=","
                             data-no-duplicate-text="Duplicate tags"
                             data-type-zone-class="type-zone"
                             data-tag-box-class="tagging"
                             data-edit-on-delete="false">{{ get_tags($options['value']) }}</div>
                    </div>
                </fieldset>
                @include('laravel-form-builder::errors')
                @include('laravel-form-builder::help_block')
            </div>
            @if ($showLabel && $showField)
                @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif

@push('scripts')
    <script src="{{ asset('/_dist/admin/js/scripts/tagging.script.min.js') }}"></script>
@endpush
