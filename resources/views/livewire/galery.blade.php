<div>
    @if (count($galery))
        @foreach ($galery as $item)
            <img width="200px" src={{ url('storage/galery/'. $item->filename)}} /> <br/><br/>
        @endforeach
    @else
        <p> No additional photos for this post </p>
    @endif
</div>
