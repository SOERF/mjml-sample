The `resources/views/view_mjml.blade.php` shows a sample mjml blade file.

To reproduce the issues mentioned blow, please install the following Plugins:

- [First Party JetBrains Blade Plugin](https://plugins.jetbrains.com/plugin/7569-blade)
- [Laravel Idea](https://plugins.jetbrains.com/plugin/13441-laravel-idea)
- [MJML Support](https://plugins.jetbrains.com/plugin/16418-mjml-support)

The follwing behaviors are desired but lost when enabling the MJML Support Plugin:

- There should be syntax highlighting that recognises blade directives like `@foreach` and blade comments like `{{-- This is a comment --}}`. 
- The JetBrains Blade Plugin should provide autocompletion for blade directives like `@foreach`.
- The Laravel Idea Plugin should provide autocompletion for custom blade components like `<x-template_mjml/>`.
- For comments the blade style `{{-- This is a comment --}}` should be used. Instead, only HTML comments like `<!-- This is a comment -->` are recognised as such. 

Overall it seems like PhpStorm no longer recognises *_mjml.blade.php files as blade files when enabling the MJML Support Plugin. 
