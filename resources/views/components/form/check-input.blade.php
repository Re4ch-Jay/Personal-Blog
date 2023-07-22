@props(['name'])
<div class="flex items-start">
    <div class="flex items-center h-5">
        <input id="terms" name="{{$name}}" type="checkbox" checked value="{{old($name)}}" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
    </div>
<label for="terms" class="pb-3 ml-2 font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
</div>
<x-form.error name="terms"/>