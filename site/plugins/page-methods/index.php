<?php

Kirby::plugin('objecteam/page-methods', [
    'pageMethods' => [
        'summary' => function ($size = 150) {
            if($this->contentblocks()->exists() && $this->contentblocks()->isNotEmpty()) {
                foreach($this->contentblocks()->toBuilderBlocks() as $block) {
                    if($block->_key() == 'text') {
                        return $block->textfield()->excerpt($chars = $size);
                        break;
                    }
                }
            } else if($this->text()->exists() && $this->text()->isNotEmpty()) {
                return $this->text()->excerpt($chars = $size);
            } else if($this->description()->exists() && $this->description()->isNotEmpty()) {
                return $this->description()->excerpt($chars = $size);
            } else {
                return ' ';
            }
        }
    ]
]);
