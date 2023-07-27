@props(['comment'])
<article class="p-6 mb-6 text-base bg-white rounded-lg dark:bg-gray-900">
    <x-comment.header :comment="$comment" name="{{$comment->user->name}}" created_at="{{$comment->created_at}}"/>
    <p>{{$comment->body}}</p>
    <div class="flex items-center mt-4 space-x-4">
        <button type="button"
            class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
            Reply
        </button>
        @if (auth()->user()?->id === $comment->user->id) 
            <form action="/post/{{$comment->id}}/comment" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    Delete
                </button>
            </form>
            <a href="/post/{{$comment->id}}/comment/edit">Edit</a>
        @endif
    </div>
</article>