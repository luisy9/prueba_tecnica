<x-layout>
    <div class="container">
    @if (session('success'))
        <div class="alert alert-success mt-4">
            {{ session('success') }}
        </div>
    @endif
        <div class="pt-4">
                <h1 class="fw-light">{{ $data }}</h1>
                <div class="py-3">
                    <a href="/authors/create" class="bg-primary border border-0 rounded px-3 py-2 text-white text-decoration-none">Create</a>
                </div>
                @php
                    $thead = ['#', 'Name', 'Action'];
                @endphp
                <table class="table">
                    <thead>
                        <tr>
                            @foreach($thead as $key)
                                <th>{{$key}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($authors as $author)
                            <tr class="">
                                @foreach($author->getAttributes() as $a => $name)
                                    @if($a != 'id' && $a != 'name' && $a != 'created_at')
                                        <td class="d-flex gap-2">
                                                <a class="bg-primary border border-0 rounded px-3 py-2 text-white text-decoration-none" href="/authors/{{$author->id}}/edit">Edit</a>
                                                <form action="{{ route('authors.delete', $author->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                        <button type="submit" class="bg-danger border border-0 rounded px-3 py-2 text-white text-decoration-none">Delete</button>
                                                </form>

                                        </td>
                                    @elseif($a === 'id' || $a === 'name')
                                        <td>
                                            {{$name}}
                                        </td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</x-layout>
