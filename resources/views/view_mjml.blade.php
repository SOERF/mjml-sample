{{--The complete code highlighting for .blade.php files is gone--}}

{{--When creating a comment using ctrl+/ a html comment block will be created instead of a blade comment. Also blade comment blocks are not recognised as comments--}}

{{--Code highlighting and autocomplete for @foreach and other blade directives should be provided by First Party Blade Plugin (https://plugins.jetbrains.com/plugin/7569-blade)--}}
@foreach([1,2,3] as $number)
{{$number}}
@endforeach

{{--Autocomplete for custom laravel components like <x-template_mjml> should be provided by LaravelIdea Plugin (https://plugins.jetbrains.com/plugin/13441-laravel-idea)--}}
<x-template_mjml/>

{{--It seems like the whole file is no longer recognised as a blade file by PhpStorm--}}
