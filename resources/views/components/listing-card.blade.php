@props(['listing'])


<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <img class="rounded-t-lg" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/nocar.gif')}}" alt="">
    
    <div class="p-6">
        <a href="/listings/{{$listing->id}}">
            <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$listing->title}}</h3>
        </a>
        
        <div class="mt-2">
            <h5 class=" font-extrabold font-serif text-blue-600"><i class="fa-solid fa-location-dot"> {{$listing->location}}</i></h5>
        </div>
        <div class="flex mt-2">
            <h3 class="mb-2 tracking-tight font-serif text-gray-900 dark:text-white">{{$listing->seller}}</h3>
        </div>
    </div>
    <div class="flex justify-around p-4 text-gray-700 border-t border-gray-300">
        <div class="flex">
            <x-listing-tags :tagsCsv="$listing->tags" />
        </div>
    </div>
</div>
