<?php

namespace stem\Blocks;

use ILab\Stem\UI\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SampleBlockWithFields extends Block {
    protected function configureBlock() {
        $this->category = 'Stem';
        $this->description = 'Custom fields';
        $this->title = 'Fields Sample';
        $this->icon = 'admin-links';
        $this->keywords = ['sample'];
    }

    protected function configureFields() {
        $builder = new FieldsBuilder('sample-block');
        $builder->addText('header');
        $builder->addImage('nice_image');
        return $builder->build();
    }
}