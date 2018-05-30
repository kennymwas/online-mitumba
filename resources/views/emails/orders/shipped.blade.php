@component('mail::message')
# Introduction

Your Order has been delivered
Total price is: {{ $total}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
