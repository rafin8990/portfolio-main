@extends('app')
@section('title')
Rafin Hossain
@endsection
@section('home')
<section class="min-h-screen space-y-10 text-white commonContainer mt-10">

    <p class="text-4xl">
        {{$project['name']}} ({{$project['designation']}})
    </p>


    <div class="space-y-5">
        <p> {{$project['shortDes']}}</p>

        <p>
            <span>Technologies :</span> {{$project['technology']}}
        </p>

        <p>
            @foreach ($project['bullets'] as $b)
                <li>{{$b}}</li>
            @endforeach
        </p>

        <div class="flex items-center group gap-4  hover:underline underline-offset-8 relative">
            <a class="relative" href="{{$project['liveLink']}}">Open Project</a>
            <div class="w-5  group-hover:-rotate-45   transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                    </path>
                </svg>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pb-10">
        <img src="{{$project['imageOne']}}" alt="project details">
        <img src="{{$project['imageTwo']}}" alt="project details">
        <img src="{{$project['imageThree']}}" alt="project details">
        <img src="{{$project['imageFour']}}" alt="project details">
    </div>


</section>
@endsection