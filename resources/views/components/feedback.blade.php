<section class="commonContainer grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
    @foreach ($data as $key => $r)
        <div class="bg-white opacity-40 hover:opacity-100 transition-all p-3 w-fit max-w-[400px] rounded-[15px]">
            <i class="fa-solid text-purple-500 text-4xl fa-quote-left"></i>
            <p>{{ $r['des'] }}</p>

            <p class="mt-5">{{$r['name']}} {{$r['address']}}</p>
            <p class="mt-5">{{$r['date']}}</p>

        </div>
    @endforeach
</section>