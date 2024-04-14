<x-layout>
    <div class="container">
        <h1 class="text">Edit Book</h1>
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <form method="POST" action="{{ route('books.create') }}" class="needs-validation container">
            @csrf
            <div class="container has-validation row gap-5">
                <div class="form-group">
                    <label for="inputName" class="form-label">
                        Title
                    </label>
                    <input value="{{$title}}" type="text" name="title" id="inputName" class="form-control @if(session('error1')) is-invalid @endif" />
                    <div id="validationServer05Feedback" class="invalid-feedback">
                        {{session('error1')}}
                    </div>
                </div>

                <div class="form-group">
                    <select defaulValue="{{ $authorName }}" class="form-select @if(session('error2')) is-invalid @endif " name="author_name">
                        <option value="{{ $authorName }}" disabled selected>{{ $authorName }}</option>
                        @foreach($allAuthors as $author)
                            <option value="{{$author->id}}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                    <div id="validationServer05Feedback" class="invalid-feedback">
                        {{session('error2')}}
                    </div>
                </div>

                <div class="">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>


<style>
    .container {
        width: 80%;
        margin: 0 auto;
    }
</style>
