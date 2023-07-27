@props(['name', 'value'])
<div class="mb-6">
    <label for="{{$name}}" class="block mb-2 font-medium text-gray-900 dark:text-white">Your {{$name}}</label>
    <textarea rows="5" type="text" name="{{$name}}" id="{{$name}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">{!! $value !!}</textarea>
    <x-form.error name="{{$name}}"/>
</div>