@extends('app')
@section('title')
Rafin Hossain
@endsection
@section('home')
this is project details
<section class="min-h-screen[calc(100vh)] space-y-10 text-white commonContainer mt-10">

    <p class="text-4xl">
        Flight Local (B2B
        Travel Solution)
    </p>

    <div class="space-y-5">
        <p>Flight Local is a rapidly growing Bangladesh based company who
            dominates the online travel & tourism trade. They offer prompt visa
            service, varieties of ticketing options, multiple lists for short & long
            holiday plans, group tour packages, endless hotel lists as per
            requirements. </p>

        <p>
            <span>Technologies :</span>
            React, Material
            UI, GraphQL
        </p>

        <div class="flex items-center group gap-4  hover:underline underline-offset-8 relative">
            <a class="relative" href="/">Open Project</a>
            <div class="w-5  group-hover:-rotate-45   transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                    </path>
                </svg>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <img src="/images/desc.png" alt="">
        <img src="/images/desc.png" alt="">
        <img src="/images/desc.png" alt="">
        <img src="/images/desc.png" alt="">
    </div>


</section>
@endsection