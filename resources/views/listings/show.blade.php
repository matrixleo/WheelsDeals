
<x-layout>
<a href="/" class="inline-block text-white ml-4 "
><i class="fa-solid fa-arrow-left text-white"></i> Back
</a>
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero"  src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/nocar.gif"')}}">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{$listing->title}}</h1>
         <div class="flex flex-row justify-between w-11/12" >
          <h2><i class="fa-solid text-gray-900"> Dealer: {{$listing->seller}}</i></h2>
          <h2><i class="fa-solid fa-location-dot text-gray-900"> {{$listing->location}}</i></h2>
         </div>
        <p class="mb-8 leading-relaxed w-full text-gray-900">{{$listing->description}}</p>
        <x-listing-tags :tagsCsv="$listing->tags" />
        <div class="flex justify-center pt-3 ">
          <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" href="mailito:{{$listing->email}}"> Contact Us</button>
          <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg" href="mailito:{{$listing->website}}">Visit our Website</button>
        </div>
      </div>
    </div>
  </section>
</x-layout>