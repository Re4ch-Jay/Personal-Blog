<x-layout>
    <form class="py-8 px-4 mx-auto max-w-screen-sm lg:py-16 lg:px-6">
        <x-form.input-label name="username" type="text" placeholder="John Doe"/>
        <x-form.input-label name="email" type="email" placeholder="john@doe.com"/>
        <x-form.input-label name="password" type="password" placeholder="*****************"/>
        <x-form.input-label name="confirm-password" type="password" placeholder="*****************"/>
        <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
                <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
            </div>
        <label for="terms" class="ml-2 font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
        </div>
        <x-button-submit name="Register"/>
    </form>
</x-layout>