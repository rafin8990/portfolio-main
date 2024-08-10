<section class="py-10 text-white commonContainer">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        @foreach ($projects as $project)
            <div class="space-y-3">
                <img src="{{$project['imageOne']}}" alt="">
                <div class="flex justify-between">
                    <p class="text-xl md:text-2xl">{{$project['name']}}</p>
                    <a href="{{route('project.details',$project['id'])}}" class="text-xl md:text-2xl font-semibold text-blue-300">View Projects</a>
                </div>
            </div>
        @endforeach
        
    </div>
</section>