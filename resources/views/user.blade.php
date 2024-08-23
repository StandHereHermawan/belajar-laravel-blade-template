@once
<style>
    .grey {
        color: lightgrey;
    }
</style>
@endonce

<h1>{{$user['name']}}</h1>
<ul>
    @foreach ($user['hobbies'] as $hobby)
    <li class="grey">{{$hobby}}</li>
    @endforeach
</ul>