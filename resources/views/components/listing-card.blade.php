@props(['listing'])


<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="images/nocar.gif"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->seller}}</div>
             <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot">{{$listing->location}}</i>
            </div>
        </div>
    </div>
</x-card>
