<?php

namespace stem\Blocks;

use ILab\Stem\UI\Block;

class SampleBlock extends Block {
    protected function configureBlock() {
        $this->category = 'Stem';
        $this->description = 'Sample';
        $this->title = 'Sample Block';
        $this->icon = 'admin-links';
        $this->keywords = ['sample'];
    }
}