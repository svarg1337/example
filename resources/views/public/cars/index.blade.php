<x-layout.guest title="Автомобили">
<x-alert.status />

<h2>Найдено: {{ $cars->count() }} штук</h2>
<br>

<br>
<div class="row">
@foreach ($cars as $car)
<div class="col m-3">
==========================
 <br>
<a href="{{route('cars.show', [$car->id])}}">
#{{ $car->id }} Марка: {{ $car->brand->title }}
</a>
<br>
<em>{{ $car->brand->country->title }}</em>
 <br>
 Модель: {{ $car->model }}
 <br>

 Цена: {{ $car->price }}₽
 <br>
 Кузов: {{ $bodyTypes[$car->body_type] }}
 <br>
 VIN номер: {{ $car->vin }}
 <br>
 Теги: 
 @foreach($car->tags as $tag)
 <span class="badge text-bg-info">
 {{ $tag->title }}
 </span>
 @endforeach
 <br>
@can('cars')
 <a href="{{route('cars.edit',  [$car->id])}}"> Редактировать </a>
@endauth
 </div>
 @endforeach
 </div>

 

</x-layout.guest>