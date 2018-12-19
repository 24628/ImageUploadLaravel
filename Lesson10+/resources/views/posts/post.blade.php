<div class="blog-post">

    <h2 class="blog-post-title">

        <a href="/posts/{{ $post->id }}">

        {{ $post->title }}

        </a>

    </h2>

    <p class="blog-post-meta">

        {{ $post->user->name }} on

        {{ $post->created_at->toFormattedDateString() }}

    </p>

    <p>
        {{
        $post->body
        }}
    </p>

    <br>

    @if (Auth::check())

        @if(Auth::user()->id == $post->user_id)
        <div class="button-box col-lg-12">

            <a href="/posts/{{ $post->id }}/edit" class="btn btn-info" role="button">Edit</a>
            <a href="/posts/{{ $post->id }}/delete" class="btn btn-info" role="button">Delete</a>

        </div>

        @endif

    @endif

</div>