<?php

return [
    'languages' => true,
    'debug' => true,
    'hooks' => [
        'page.create:after' => function ($page) {
            $builder = $page->blueprint()->subpage_builder();
            if(!empty($builder)) {
                foreach($builder as $build) {
                    $missing = a::missing($build, array('title', 'template', 'uid'));
                    if(!empty($missing)) continue;
                    try {
                        $subPage = $page->createChild([
                            'content'  => ['title' => $build['title']],
                            'slug'     => $build['uid'],
                            'template' => $build['template'],
                        ]);
                    } catch (Exception $error) {
                        throw new Exception($error);
                    }
                    if($subPage) {
                        $subPage->publish();
                        if(isset($build['num'])) $subPage->sort($build['num']);
                    }
                }
            }
        }
    ],
    'email' => [
        'presets' => [
            'toclient' => [
                'from'    => 'info@cuboctaedro.eu',
                'subject' => 'Η κράτηση σας στο Βόλτες στην Πόλη',
                'cc'      => 'info@cuboctaedro.eu'
            ],
            'contact' => [
                'from'    => 'info@cuboctaedro.eu',
                'subject' => 'Μηνυμα απο φόρμα επικοινωνίας',
                'to'      => 'info@cuboctaedro.eu'
            ],
        ]
    ]
];
