<div>{{ $block->title }}</div>
@if(isset($block->image) && !empty($block->image))
    {!! $block->image->img('small-square') !!}
@endif