@extends('template')

@section('content')
    
<div class="bg-gray-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
    <span class="text-xs uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Programacion</span>
    <h1 class="text-3xl text-white mt-4">Blog</h1>
    <p class="text-xm text-gray-400 mt-2">Proyecto de desarrollo web para profesionales</p>

    <img src="{{ asset('images/dev.png') }}" class="absolute -right-20 -bottom-20 opacity-20">
    
</div>

<div class="px-4">
    <h1 class="text-2xl mb-8 text-gray-900">Contenido tecnico</h1>

    <div class="grid grid-cols-l gap-4 mb-4">
        @foreach ($posts as $post)
            <a href="{{ route('post', $post->slug) }}" class="bg-gray-100 rounded-lg px-6 py-4">
                <p class="text-xs flex items-center gap-2">
                    <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Tutorial</span>
                    <span>{{ $post->created_at->format('d/m/Y') }}</span>
                </p>
                <h2 class="text-lg text-gray-900 mt-2"> {{ $post->title }}</h2>

                <div class="text-xs text-gary-900 opacity-75 flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                        <path
                            d="M10.375 2.25a4.125 4.125 0 100 8.25 4.125 4.125 0 000-8.25zM10.375 12a7.125 7.125 0 00-7.124 7.247.75.75 0 00.363.63 13.067 13.067 0 006.761 1.873c2.472 0 4.786-.684 6.76-1.873a.75.75 0 00.364-.63l.001-.12v-.002A7.125 7.125 0 0010.375 12zM16 9.75a.75.75 0 000 1.5h6a.75.75 0 000-1.5h-6z" />
                    </svg>
                    {{ $post->user->name }}
                </div>
            </a>
        @endforeach
    </div>

    {{ $posts->links() }}
</div>
@endsection