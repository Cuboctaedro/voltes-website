<?php

Kirby::plugin('objecteam/file-methods', [
    'fileMethods' => [
        'square_sm' => function () {
            return $this->thumb([
                'crop'       => true,
                'width'      => 304,
                'height'     => 304,
                'quality'    => 80,
            ])->url();
        },
        'square_md' => function () {
            return $this->thumb([
                'crop'       => true,
                'width'      => 448,
                'height'     => 448,
                'quality'    => 80,
            ])->url();
        },
        'square_lg' => function () {
            return $this->thumb([
                'crop'       => true,
                'width'      => 608,
                'height'     => 608,
                'quality'    => 80,
            ])->url();
        },

        'landscape_sm' => function () {
            return $this->thumb([
                'crop'       => true,
                'width'      => 432,
                'height'     => 288,
                'quality'    => 80,
            ])->url();
        },
        'landscape_md' => function () {
            return $this->thumb([
                'crop'       => true,
                'width'      => 608,
                'height'     => 405,
                'quality'    => 80,
            ])->url();
        },
        'landscape_lg' => function () {
            return $this->thumb([
                'crop'       => true,
                'width'      => 928,
                'height'     => 608,
                'quality'    => 80,
            ])->url();
        },
        'landscape_xl' => function () {
            return $this->thumb([
                'crop'       => true,
                'width'      => 1248,
                'height'     => 832,
                'quality'    => 80,
            ])->url();
        },

        'gallery_xs' => function () {
            return $this->thumb([
                'crop'       => true,
                'width'      => 480,
                'height'     => 240,
                'quality'    => 80,
            ])->url();
        },
        'gallery_sm' => function () {
            return $this->thumb([
                'crop'       => true,
                'width'      => 640,
                'height'     => 240,
                'quality'    => 80,
            ])->url();
        },
        'gallery_md' => function () {
            return $this->thumb([
                'crop'       => true,
                'width'      => 960,
                'height'     => 240,
                'quality'    => 80,
            ])->url();
        },
        'gallery_lg' => function () {
            return $this->thumb([
                'crop'       => true,
                'width'      => 1280,
                'height'     => 320,
                'quality'    => 80,
            ])->url();
        },
        'gallery_xl' => function () {
            return $this->thumb([
                'crop'       => true,
                'width'      => 1600,
                'height'     => 400,
                'quality'    => 80,
            ])->url();
        },

    ]
]);
