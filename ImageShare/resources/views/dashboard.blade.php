<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="container py-12">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-1 ">

            @foreach($images as $img)
                @php $randomId = rand(100,300) @endphp
                <div class="container">
                    <img style="height: 100%; max-height: {{$randomId}}px; width:100%; max-width: 300px;object-fit: contain;"
                         class="img  rounded bg-gray-100 " src="{{asset("images/" . $img->nameImg)}}"
                         alt="test">
                    <form class="btn" method="post">
                        @csrf
                        <input name="id" value="{{$img->id}}" type="hidden">
                        <button name="submit" type="submit"></button>
                    </form>
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>
