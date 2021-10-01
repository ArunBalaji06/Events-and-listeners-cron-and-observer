@component('mail::message')
{{$details['title']}}
Welcome to event and listeners.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
