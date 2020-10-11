<div class="ys_pic">
    <div style="height:79px;"></div>
    @foreach ($taqeem->pics as $pic)
        <img style="padding:5px; border:1px solid #12102f; margin:0 0 9px 0;" width="361px" height="229px" src="{{ public_path('Upload') }}{{$pic->path}}/{{$pic->filename}}" alt="{{$pic->filename}}" />
    @endforeach
</div>