<x-layout>
    <div class="container">
        <h1>{{ $data }}</h1>

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
                            @if($a != 'id' && $a != 'title' && $a != 'created_at')
                                <td class="">
                                    <button class="bg-primary border border-0 rounded px-3 py-2 text-white">Edit</button>
                                    <button class="bg-danger border border-0 rounded px-3 py-2 text-white">Delete</button>
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
