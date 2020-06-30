@component('mail::message')
# New post published

A new post has been published on your blog!

## {{ $title }}

@component('mail::button', ['url' => config('app.url') . '/posts'])
View blog archive
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent