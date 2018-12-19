@extends ('layouts.master')



@section ('content')



        <form method="POST" action="/posts/{{ $post->id }}/edit">

            {{ csrf_field() }}
            @method('PUT')

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
            </div>

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea id="body" name="body" class="form-control" rows="10" required>
                    {{
                    $post->body
                    }}
                </textarea>
            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Edit</button>

            </div>

            @include('layouts.errors')

        </form>

@endsection