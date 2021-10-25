<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="container py-12">

        @foreach($details as $data)

            <div class="text-center grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2">
                <div>
                    <img style="margin: 0;align-items: center" class="text-center img max-w-lg rounded bg-gray-100 " src="{{asset("images/" . $data->nameImg)}}"
                         alt="test">
                </div>
                <div class="mt-5">
                    <h2 class="text-center mb-5">{{$data->title}}</h2>
                    <p class="text-center text-lg mt-5"> Description : </p>
                    <p class=" text-center">{{$data->desc}}</p>
                    <p class="text-center text-lg mt-5"> Auteur : </p>
                    <p class=" text-center">{{$data->nameUser}}</p>
                    <p class="text-center text-lg mt-5"> date du post : </p>
                    <p class=" text-center">{{$data->date}}</p>
                </div>
            </div>


        @endforeach

    </div>

</x-app-layout>
