<x-layout.guest title="Регистрация">
    <x-form action="{{route('auth.registration.store')}}">
        <x-form-input name="name" label="Имя" />
        <x-form-input name="email" label="Email" />
        <x-form-input name="password" type="password" label="Пароль" />
        <x-form-input name="password_confirmation" type="password" label="Подтверждение пароля" />
        <div class="mb-3">
            <button class="btn btn-success">Зарегестрироваться</button>
        </div>

    </x-form>
</x-layout.guest>