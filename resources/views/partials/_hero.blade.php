<section
            class="relative h-72 bg-laravel flex flex-col rounded-md  justify-center align-center text-center space-y-4 mb-4"
                style="
                background-color: rgba(0, 0, 0, 0.8);
                background-image: url('images/cover2.jpeg')"
                id="hero"
            >
            <div
                class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
                id="carsphoto"
            ></div>

            <div class="z-10">
                <img class="text-6xl font-bold uppercase text-white" id="heroimg" src="{{asset('images/logo-blue.png')}}" />
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Find or post newst cars
                </p>
                <div>
                    <a
                        href="/listings/create"
                        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                        >Post a Car</a
                    >
                </div>
            </div>
        </section>