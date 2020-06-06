@component('mail::message')
# Introduction

SeLamat, anda telah terdaftar di SMA n 1 Deli Serdang

@component('mail::button', ['url' => ''])
Klik Disini
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
