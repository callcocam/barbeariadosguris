@if ($showLabel && $showField)
    @if ($options['wrapper'] !== false)
        <div {!! $options['wrapperAttrs'] !!} >
            @endif
            @endif
            @if ($showLabel && $options['label'] !== false && $options['label_show'])
                {!! Form::customLabel(__($name), __($options['label']), $options['label_attr']) !!}
            @endif
            @isset($options['select'])
                <div class="col-md-6 col-sm-6 ">
                    @endif
                    @if ($showField)
                        <?php $emptyVal = $options['empty_value'] ? ['' => $options['empty_value']] : null; ?>
                        {!! Form::select($name, (array)$emptyVal + $options['choices'], $options['selected'], $options['attr']) !!}
                        @include('laravel-form-builder::help_block')
                        @include('laravel-form-builder::errors')
                    @endif
                    @isset($options['select'])
                </div>
            @endif

            @if ($showLabel && $showField)
                @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif
