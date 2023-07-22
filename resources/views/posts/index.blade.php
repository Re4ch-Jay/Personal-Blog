<x-layout>
    
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Blog</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p>
            </div> 
            <div class="grid gap-8 lg:grid-cols-2">
                @for ($i = 0; $i <= 100; $i++)
                    <x-card.layout>
                        <x-card.header title="News"/>
                        <x-card.title title="How to quickly deploy a static website"/>
                        <x-card.description description="Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers influence both web designers and developers.
                        "/>
                        <x-card.footer name="John Doe" />
                    </x-card.layout>
                @endfor
            </div>  
        </div>
      </section>
</x-layout>