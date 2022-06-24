
<x-layout>
    <x-card class=" p-10 rounded max-w-lg mx-auto mt-20">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Update your Post
            </h2>
            <p class="mb-4">Update the specs of your post!</p>
        </header>

        <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label
                    for="seller"
                    class="inline-block text-lg mb-2"
                    >Dealer Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="seller"
                    value="{{$listing->seller}}"
                />
                @error('seller')
                <p class="text-red-600 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2"
                    >Title</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    placeholder="Example: Mercedes, BMW"
                    value="{{$listing->title}}"
                />
                @error('title')
                <p class="text-red-600 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="location"
                    class="inline-block text-lg mb-2"
                    >Location</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="location"
                    placeholder="Example: Prishtine, Mitrovice, etc"
                    value="{{$listing->seller}}"
                />
                @error('location')
                <p class="text-red-600 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"
                    >Contact Email</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    value="{{$listing->email}}"
                />
                @error('email')
                <p class="text-red-600 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="website"
                    class="inline-block text-lg mb-2"
                >
                    Website URL
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="website"
                    value="{{$listing->website}}"
                />
                @error('website')
                <p class="text-red-600 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="tags"
                    placeholder="Specifications "
                    value="{{$listing->tags}}"
                />
                @error('tags')
                <p class="text-red-600 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Car Photo
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="logo"
                />
                <img class="object-cover object-center rounded" alt="hero"  src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/nocar.gif"')}}">
      
                @error('logo')
                <p class="text-red-600 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2"
                >
                    Description
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    rows="10"
                    placeholder="Specifications, Pros, Cons, etc"
                >{{$listing->description}}
                </textarea>
                @error('description')
                    <p class="text-red-600 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-4">
                <button
                    class="bg-laravel text-black rounded py-2 px-4 hover:bg-slate-600"
                >
                    Update
                </button>

                <a href="/" class="bg-laravel text-black rounded py-2 px-4 hover:bg-red-500"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>