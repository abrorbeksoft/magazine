<select name="" id="">
    @foreach($posts as $post)
        <option value="{{ $post->id }}">{{ $post->body }}</option>
    @endforeach
</select>
