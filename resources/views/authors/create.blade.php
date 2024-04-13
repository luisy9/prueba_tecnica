<x-layout>
    <div class="container">
        <h1 class="">Add new Author</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('author.create') }}">
            @csrf
            <div class="container">
                <label for="inputName" class="form-label">
                    Name
                </label>
                <input type="text" name="name" id="inputName" class="form-control" /> 
                <button class="bg-primary px-4 py-2 text-white border border-0 rounded my-2">Submit</button>
            </div>
            </div>
        </form>
    </div>
</x-layout>