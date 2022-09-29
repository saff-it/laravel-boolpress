
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$post -> title}}</h5>
      <h6 class="card-title">Tags:
          @if (isset($post->tags))
            @foreach ($post->tags as $tag)
                {{ $tag->name }}
            @endforeach
          @endif
      </h6>
      <p class="card-text">{{$post -> post_content}}</p>
      <div class="card-image">
        @if (filter_var($post->post_image,FILTER_VALIDATE_URL))
            <img src="{{$post->post_image}}" alt="post_img">
        @else
            <img src="{{ asset('storage/') . $post->post_image}}" alt="post_img">
        @endif
      </div>
    </div>
  </div>

