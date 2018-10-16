<div style="border: 1px solid blue">
    <div>{{ $block->title }}</div>
    @if(isset($block->image) && !empty($block->image))
        {!! $block->image->img('small-square') !!}
    @endif
    @foreach($block->pages as $page)
        <div>
            <div>{{$page->title}}</div>
            {!! $page->image->img('small-square') !!}
        </div>
    @endforeach
</div>
