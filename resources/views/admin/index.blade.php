<x-layout>  
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">  
        <x-primary-button link="/post/create" name="Create Post"/>
        <x-search page="admin" :categories="$categories"/>
        <table class="mt-10 w-full text-left text-lg text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created At
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 my-5">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           {{$post->title}}
                        </th>
                        <td class="px-6 py-4">
                            {{$post->created_at}}
                        </td>
                        <td class="px-6 py-4 flex flex-row justify-between">
                            <a href="/post/{{$post->id}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                            <a href="/post/{{$post->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <x-button-delete post="{{$post->id}}"/>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="my-5">
            {{$posts->links()}}
        </div>
    </div>
</x-layout>