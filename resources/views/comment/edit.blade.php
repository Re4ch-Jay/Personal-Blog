<x-layout>
    <div class=" max-w-screen-xl items-center mx-auto p-4">
        @can('update', $comment)
            <form method="POST" action="/post/{{$comment->id}}/comment" class="mb-6">
                @method("PUT")
                @csrf
                <div
                    class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <label for="comment" class="sr-only">Your comment</label>
                    <x-form.textarea-edit name="body" value="{{$comment->body}}" />
                </div>
                <x-button-submit name="Comment" />
            </form>
        @endcan
    </div> 
</x-layout>