@component('mail::message')
# Welcome aboard {{ ucwords(strtolower($name)) }}!

Thank you so much for joining Git-Codes! To finish signing up, you just need to confirm that we got your email right.

@component('mail::button', ['url' => $url])
Confirm Email
@endcomponent


Copy and paste this link if button above not working: {{ $url }}

{{-- Thanks,<br> --}}
{{-- {{ config('app.name') }} --}}
@endcomponent