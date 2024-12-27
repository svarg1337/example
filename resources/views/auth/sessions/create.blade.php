<x-layout.guest title="Вход">
    <x-form action="{{route('auth.sessions.store')}}">
        <x-form-input name="email" label="Email" />
        <x-form-input name="password" type="password" label="Пароль" />
        <div class="mb-3">
            <button class="btn btn-success">Войти</button>
            <x-form-checkbox name="remember" label="Запомнить" />
        </div>
        
    </x-form>
</x-layout.guest>