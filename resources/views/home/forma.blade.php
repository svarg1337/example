<h2>Создать товар</h2>
<form method="post" action="/form-post">
    @csrf
    <div>Title <input name="title" value="{{old('title')}}"></div>
    <div>Price <input name="price" value="{{old('price')}}" ></div>
    <div>Description <textarea name="description">{{old('description')}}</textarea></div>
    <div>in_stock <input type="checkbox" value="1"  name="in_stock" checked /></div>
    <div>show_on_home <input type="checkbox" value="1"  name="show_on_home" checked /></div>
    <button>Send</button>
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
 