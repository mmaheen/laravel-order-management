<x-layouts.app title="Login">
    <h1>Sign in</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-form.error>{{ $error }}</x-form.error>
        @endforeach
    @endif

    @if (session('error'))
        <x-form.error>{{ session('error') }}</x-form.error>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <x-form.email-field name="email" label="Email" />
        <x-form.password-field name="password" label="Password" />
        <x-form.submit-button>Login</x-form.submit-button>
    </form>
    Don't have an account? <a href="{{ route('register') }}" class="text-blue-500">Register here</a>.
</x-layouts.app>
