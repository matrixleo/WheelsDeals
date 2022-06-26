<x-layout>
    @include('partials._hero')    
    @include('partials._search')

    <section class="px-4 lg:px-16">
                <div class="py-12">
                    <h1 class="text-2xl font-bold text-center text-gray-800 lg:text-4xl">Future Car</h1>
                    <div class="flex justify-center">
                        <div class="w-40 h-1 bg-gray-800 rounded"></div>
                    </div>
                </div>
                
    @unless (count($listings)==0)

    <div class="flex flex-row flex-wrap gap-5 wd-full">
    @foreach($listings as $listing)

        <x-listing-card :listing="$listing"/>
        
    @endforeach
    </div>

    @else
    <p>No listings found</p>
    @endunless
    </div>
    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>
    </section> 
</x-layout>