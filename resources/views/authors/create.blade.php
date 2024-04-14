<x-layout>
    <div class="container-fluid">
        <div class="container">
            <h1 class="fw-light pt-5 text-center">Add new Author</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

        <form method="POST" action="{{ route('author.create') }}" class="needs-validation">
            @csrf
            <div class="container has-validation">
                <label for="inputName" class="form-label">
                    Name
                </label>
                <input type="text" name="name" id="inputName" class="form-control @if(session('error')) is-invalid @endif" /> 
                <div id="validationServer05Feedback" class="invalid-feedback">
                    {{session('error')}}
                </div>
                
                <button class="bg-primary px-4 py-2 text-white border border-0 rounded my-2" type="submit">Submit</button>
            </div>
        </form>
        </div>
    </div>
</x-layout>

<style>
    .container {
        width: 80%;
        margin: 0 auto;
    }
</style>
