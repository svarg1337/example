<x-layout.main title="Теги">
    <x-alert.status />

    <h2>Найдено: {{ $tags->count() }} штук</h2>
    <br>
    <br>
    <h4><a href="{{route('tags.create')}}">+++Добавить новый+++</a></h4>
    <br>
    <div class="row">
        @foreach ($tags as $tag)
        <div class="col m-3">

            <br>
            <a href="{{route('tags.show', [$tag->id])}}">
                #{{ $tag->id }}
            </a>
            <br>
            Название тега: <b>{{ $tag->title }} </b>
            <br>

            <a href="{{route('tags.edit',  [$tag->id])}}"> Редактировать </a>
            <br>

            @foreach($tag->cars as $car)
            <div class="border border-2 border-primary">
                Car: {{$car->model}}
                <br>
                ID: {{$car->id}}
                <br>
                Цена: {{$car->price}}
                <br>
            </div>
            @endforeach

        </div>
        @endforeach
    </div>



</x-layout.main>