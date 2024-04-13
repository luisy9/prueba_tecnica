<x-layout>
    <div class="container">
        <h1>{{ $data }}</h1>
        <button class="bg-primary border border-0 rounded px-3 py-2 text-white">Create</button>

        @php
            $thead = ['#', 'Title', 'Author', 'Action'];
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
                @foreach($books as $book)
                    <tr class="">
                        @foreach($book->getAttributes() as $a => $name)
                            @if($a != 'id' && $a != 'title' && $a != 'created_at' && $a != 'author_id')
                                <td class="">
                                    <button class="bg-primary border border-0 rounded px-3 py-2 text-white">Edit</button>
                                    <button class="bg-danger border border-0 rounded px-3 py-2 text-white">Delete</button>
                                </td>
                            @elseif($a === 'id' || $a === 'title')
                                <td>
                                    {{$name}}
                                </td>
                            @elseif($a === 'author_id')
                                <td>
                                    {{$book->author->name}}
                                </td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
