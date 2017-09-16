@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# {{  trans('messages.whoops') }}
@else
# {{  trans('messages.hello') }}
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
{{  trans('messages.regards') }},<br>{{  trans('messages.giscore_client_name') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
{{  trans('messages.b3_reset_password') }} "{{ $actionText }}" {{  trans('messages.b4_reset_password') }}   [{{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
@endisset
@endcomponent
