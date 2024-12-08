<x-layout.main title="Тег # {{$tag->id}}">
    <x-alert.status />

<br>
 Название: {{ $tag->title }}
 <br>
ID: {{ $tag->id }}
 <br>

 @foreach($tag->cars as $car)
 <div class="border border-2 border-primary">
<a href="{{ route('cars.show', [$car->id]) }}">
 -- Car: {{$car->model}}
</a>
 <br>
 ID: {{$car->id}}
 <br>
 Цена: {{$car->price}}
 <br>
</div> 
@endforeach
<br>
 <a href="{{ route('tags.index') }}">
 На главную
</a>
</x-layout.main>