<x-layout>
    <form method="POST" action="/register" class="py-8 px-4 mx-auto max-w-screen-sm lg:py-16 lg:px-6">
        @csrf
        <x-form.input-label name="name" type="text" placeholder="John Doe"/>
        <x-form.input-label name="email" type="email" placeholder="john@doe.com"/>
        <x-form.input-label name="password" type="password" placeholder="*****************"/>
        <x-form.input-label name="password_confirmation" type="password" placeholder="*****************"/>
        <x-form.check-input name="terms"/>
        <x-button-submit name="Register"/>
        <a href="/login">Already have account? <span class="text-blue-700">Login</span> </a>
    </form>
</x-layout>