<x-layout>
    <div class="container">
        <h1 class="">Edit Author</h1>
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <form method="POST" action="{{ route('authors.update', $author->id) }}" class="needs-validation">
            @csrf
            @method('PUT')
            <div class="container has-validation">
                <label for="inputName" class="form-label">
                    Name
                </label>
                <input type="text" name="name" value="{{ $author->name }}" id="inputName" class="
                form-control @if(session('error')) is-invalid @endif" />

                <div id="validationServer05Feedback" class="invalid-feedback">
                    {{session('error')}}
                </div>
                
                <button class="bg-primary px-4 py-2 text-white border border-0 rounded my-2" type="submit">Submit</button>
            </div>
        </form>
    </div>
</x-layout>