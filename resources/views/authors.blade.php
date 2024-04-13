<x-layout>
    <div class="container bg-primary">
        <h1><?php echo $data; ?></h1>

        <ul>
            @foreach($authors as $author)
            <li>{{ $author->name }}</li>
            @endforeach
        </ul>
    </div>
</x-layout>