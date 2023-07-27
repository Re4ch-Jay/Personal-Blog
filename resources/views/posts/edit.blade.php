<x-layout>
    <form method="POST" action="/post/{{$post->id}}" class="py-8 px-4 mx-auto max-w-screen-sm lg:py-16 lg:px-6">
        @method("PUT")
        @csrf
        <x-form.input-edit name="title" type="text" value="{{$post->title}}" placeholder="Laravel Backend" />
        <x-form.input-edit name="description" type="text" value="{{$post->description}}" placeholder="Lorem ipsum..."/>
        <x-form.textarea-edit name="markdown" value="{{$post->markdown}}" />
        <div class="mb-5">
            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            <select id="category_id" name="category_id" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" 
                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
            <x-form.error name="category_id" />
        </div>
        <x-button-submit name="Save"/>
    </form>
</x-layout>