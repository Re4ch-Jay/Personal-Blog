@props(['name', 'date'])
<address class="flex items-center mb-6 not-italic">
    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
        <img class="mr-4 w-16 h-16 rounded-full" src="https://avatars.githubusercontent.com/u/111555521?v=4" alt="Jese Leos">
        <div>
            <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{$name}}</a>
            <p class="text-base font-light text-gray-500 dark:text-gray-400">Software Engineer</p>
            <p class="text-base font-light text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{$date}}</time></p>
        </div>
    </div>
</address>