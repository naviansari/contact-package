@component('mail::message')
# Introduction
There is Query from {{ $name }}
Message:
{{ $message }}

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
