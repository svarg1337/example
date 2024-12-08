<x-layout.main title="Редактировать товар # {{$car->id}}">

<br>
 Марка: {{ $car->brand->title }}
 <br>
 Модель: {{ $car->model }}
 <br>
 Цена: {{ $car->price }}₽
 <br>
 <hr>

{{  var_dump($errors->any()) }}

 <br>

 <x-form method="PUT" action="{{route('cars.update', [$car->id])}}">
    @bind($car)
        @include('cars.form.fields')
    @endbind
            <button class="btn btn-success">Отправить</button>
    </x-form>
 <!-- {{--
 <form method="post" action="{{route('cars.update', [$car->id])}}">
    @csrf
    @method('PUT')

        <x-input name="brand" label="Марка" default-value="{{ $car->brand }}"  /> 
        <x-input name="model" label="Модель" default-value="{{ $car->model }}"  /> 
        <x-input name="price" label="Цена ₽" default-value="{{ $car->price }}"  />  
        <x-form.select name="body_type" label="Тип кузова" :options=$bodyTypes />

    <br>
    <button>Сохранить изменения</button>
    @if ($errors->any())

    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</form> 
--}} -->

<hr>
@if($car->canDelete)
<form method="post" action="{{route('cars.destroy',  ['car' => $car->id])}}">
@csrf
@method('DELETE')
<button>Удалить товар</button>
</form>
@endif
</x-layout.main>