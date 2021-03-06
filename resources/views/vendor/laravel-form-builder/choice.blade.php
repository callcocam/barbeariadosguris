@if ($showLabel && $showField)
    @if ($options['wrapper'] !== false)
        <div {!! $options['wrapperAttrs'] !!} >
            @endif
            @endif

            @if ($showLabel && $options['label'] !== false && $options['label_show'])
                {!! Form::customLabel(__($name), __($options['label']), $options['label_attr']) !!}
            @endif
            @if ($showField)
                <div class="col-md-6 col-sm-6 ">
                @foreach ((array)$options['children'] as $child)
                    {!! $child->render($options['choice_options'], true, true, false) !!}
                @endforeach

                @include('laravel-form-builder::errors')
                @include('laravel-form-builder::help_block')
                </div>
            @endif
            @if ($showLabel && $showField)
                @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif
