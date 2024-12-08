<x-layout.main title="Удаленные товары">
<x-alert.status />

<h2>Найдено: {{ $cars->count() }} штук</h2>
<br>
<br>
<br>
<div class="row">
@foreach ($cars as $car)
<div class="col m-3">
==========================
 <br>
<a href="{{route('cars.show', [$car->id])}}">
 #{{ $car->id }} Марка: {{ $car['brand'] }}
</a>
 <br>
 Модель: {{ $car['model'] }}
 <br>
 Цена: {{ $car['price'] }}₽
 <br>
 Кузов: {{ $bodyTypes[$car->body_type] }}
 <br>
 VIN номер: {{ $car->vin }}
 <br>
 <a href="{{route('cars.edit',  [$car->id])}}"> Редактировать </a>
 <br>

 <form method="post" action="{{route('cars.restore',  [$car->id])}}">
@csrf
@method('PUT')
<button>Восстановить товар</button>
</form>
 
 <br>
 </div>
 @endforeach
 </div>

 

</x-layout.main>