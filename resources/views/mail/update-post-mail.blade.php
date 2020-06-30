@component('mail::message')
# Post updated

A post has been successfully updated on your blog!

## {{ $title }}

@component('mail::button', ['url' => config('app.url') . '/posts'])
View blog archive
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent