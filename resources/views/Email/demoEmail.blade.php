@component('mail::message')
# {{ $mailData['title'] }}

This email is sent through laravel.

@component('mail::message')
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent