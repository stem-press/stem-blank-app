<?php

/**
 * This configuration controls image sizes and other things related to that.
 */

return [
	// Controls which of WordPress's default sizes are enabled or disabled.
	"disable-wp-sizes" => [
		//    "medium",
		//    "small",
		//    "large"
	],

	// Defines the image sizes you'll use in this app.
	"sizes" => [
        "hero-image" => [
            "name" => "Hero Image (Primary)",
            "width" => 854,
            "height" => 683,
            "crop" => true
        ],
        "hero-simple" => [
            "name" => "Hero Image (Simple)",
            "width" => 1560,
            "height" => 550,
            "crop" => true
        ],
        'small-square' => [
            'name' => "Small Square",
            "width" => 640,
            "height" => 640,
            "crop" => true
        ]
	],

	// Allows you to define alternate sizes for the srcset attribute for images using a particular
	// size in your theme
	"srcset" => [
		"full" => [
			"srcset" => [
				"1024" => [
					"width" => 1024,
					"height" => 15000,
					"crop" => false
				],
				"768" => [
					"width" => 768,
					"height" => 15000,
					"crop" => false
				],
				"320" => [
					"width" => 320,
					"height" => 15000,
					"crop" => false
				]
			]
		]
	]
];
