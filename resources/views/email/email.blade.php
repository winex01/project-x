@component('mail::message')
# Welcome Aboard

Your order has been shipped!

@component('mail::button', ['url' => $url])
Verify Account	
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent