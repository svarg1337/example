<x-layout.main title="Статьи">
    <x-alert.status />

    <h2>Найдено: {{ $articles->count() }} штук</h2>
    <br>
    <br>
    <h4><a href="{{route('articles.create')}}">+++Добавить новый+++</a></h4>
    <br>
    <div class="row">
        @foreach ($articles as $article)
        <div class="col m-3">
            ====================================
            <br>

            <a href="{{route('articles.show', [$article->id])}}">
                #{{ $article->id }}
            </a>
            <br>
            <h4>{{ $article->title }}</h4>
            <br>
            {{ $article->body }}
            <br>
            <a href="{{route('articles.edit',  [$article->id])}}"> Редактировать </a>
            <br>
        </div>
        @endforeach
    </div>


</x-layout.main>