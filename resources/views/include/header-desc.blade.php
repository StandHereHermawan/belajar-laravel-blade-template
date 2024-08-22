@isset($title)
<h1>{{$title}}</h1>
@else
<h1>Laravel Blade Template</h1>
@endisset

@isset($desc)
<p>{{$desc}}</p>
@endisset