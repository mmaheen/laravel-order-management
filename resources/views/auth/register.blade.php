<x-layouts.app title="Register">
    <h1>Sign up</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-form.error>{{ $error }}</x-form.error>
        @endforeach
    @endif

    @if (session('error'))
        <x-form.error>{{ session('error') }}</x-form.error>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <x-form.text-field name="name" label="Name" />
        <x-form.email-field name="email" label="Email" />
        <x-form.password-field name="password" label="Password" />
        <x-form.password-field name="password_confirmation" label="Confirm Password" />
        <x-form.submit-button>Register</x-form.submit-button>
    </form>
    Already have an account? <a href="{{ route('login') }}" class="text-blue-500">Login here</a>.
</x-layouts.app>
