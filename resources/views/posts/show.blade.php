<x-layout>
     
<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <x-user-info name='{{$post->author->name}}' date='{{$post->created_at}}'/>
                <x-primary-button link="/post/{{$post->id}}/edit" name="Edit this post"/>
                <x-article-title title="{{$post->title}}"/>
            </header>
            <x-article/>
            <x-comment/>
        </article>
    </div>
</main>
  
  <x-related-article/>
    
  <x-newsletter/>

</x-layout>