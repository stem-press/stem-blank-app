<div>{{ $block->header }}</div>
@if(isset($block->nice_image) && !empty($block->nice_image))
    {!! $block->nice_image->img('small-square') !!}
@endif