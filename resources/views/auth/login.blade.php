<x-layout>
    <form method="POST" class="py-8 px-4 mx-auto max-w-screen-sm lg:py-16 lg:px-6">
        @csrf
        <x-form.input-label name="email" type="email" placeholder="john@doe.com"/>
        <x-form.input-label name="password" type="password" placeholder="*****************"/>
        <x-button-submit name="Login"/>
        @if (Session::has('message'))
           <p class="text-red-500 text-sm mt-5">{{Session::get('message')}}</p> 
        @endif
        <a href="/register">Don't have account? <span class="text-blue-700">Register</span> </a>
    </form>
</x-layout>