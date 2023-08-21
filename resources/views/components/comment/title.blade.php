<div class="flex justify-between items-center mb-6">
    @cannot('create', \App\Models\Comment::class)
        <a href="{{ route('login') }}" class="text-lg hover:underline lg:text-2xl font-bold text-gray-900 dark:text-white">
            Login to post comment
        </a>
    @endcannot
    @can('create', \App\Models\Comment::class)
        <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">
            Comment Section
        </h2>
    @endcan
</div>