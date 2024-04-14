<x-layout>
    <div class="container">
        <h1>{{ $data }}</h1>
        <a href="/books/create" class="bg-primary border border-0 rounded px-3 py-2 text-white text-decoration-none">Create</a>

        @php
            $thead = ['#', 'Title', 'Name', 'Action'];
        @endphp
        <table class="table">
            <thead>
                <tr>
                    @foreach(__('books') as $key)
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
                                    <a href="/books/edit" class="bg-primary border border-0 rounded px-3 py-2 text-white text-decoration-none">Edit</a>
                                    <a class="bg-danger border border-0 rounded px-3 py-2 text-white text-decoration-none">Delete</a>
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
