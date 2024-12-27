<x-layout.main title="Подтвердить Email">
    <span>
        Emali адрес не подтвержден. Проверьте почту
    </span>
    <x-form action="{{route('auth.email.send')}}">
        <div class="mb-3">
            <button class="btn btn-success">Отправить письмо еще раз</button>
        </div>
    </x-form>
</x-layout.main>