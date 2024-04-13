<x-layout>
    <div class="container">
        <h1>{{ $data }}</h1>
        <a href="/authors/create" class="bg-primary border border-0 rounded px-3 py-2 text-white text-decoration-none">Create</a>
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
                                <td class="">
                                    
                                        <a class="bg-primary border border-0 rounded px-3 py-2 text-white text-decoration-none" href="/authors/{{$author->id}}/edit">Edit</a>
                                        <a class="bg-danger border border-0 rounded px-3 py-2 text-white text-decoration-none">Delete</a>
                                </td>
                            @elseif($a === 'id' || $a === 'name')
                                <td>
                                    <h1>{{$name}}</h1>
                                </td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
