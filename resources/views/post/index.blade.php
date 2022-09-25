<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Posts') }}

            <a class="text-xs bg-gray-800 text-white rounded px-4 py-2" href="{{ route('post.create') }}">Crear</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Listado de publicaciones

                    <table class="mb-4">
                        @forelse ($posts as $post)
                            <tr class="border-b border-gray-200 text-sm">
                                <td class="px-6 py-4">{{ $post->title }}</td>
                                <td class="px-6 py-4">
                                    <a class="text-indigo-600" href="{{ route('post.edit', $post) }}">Editar</a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('post.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <input type="submit" value="Eliminar" class="bg-gray-800 text-white rounded px-4 py-2" onclick="return confirm('Desea eliminar?')">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="border-b border-gray-200 text-sm">
                                Upps! no hay ninguna publicacion disponible
                            </tr>
                        @endforelse
                    </table>
                    {{ $posts->links() }}
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>