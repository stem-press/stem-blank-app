<?php

/**
 * This configuration is for aspects of the front end and UI.
 */

return [
	"options" => [
		// Turns on relative permalinks
		"relative-links" => false,
		// Forces any absolute urls in the output to this, if in production.
		"force-domain" => false,
		// Configure the view engine
		"views" => [
			// Which engine to use, either "twig" or "blade"
			"engine" => "blade",

			// directory within your theme to cache views
			"cache" => "cache/views",

		    // register your custom blade directives
		    "directives" => [
                // "yourdirective" => "\\YourNameSpace\\Directives\\YourDirective"
		    ]
		]
	],

	// Scripts and CSS to enqueue
	"enqueue" => [
		// The public path to serve assets from, relative to the theme's root path
	    "public-path" => "/public/",
		// Adds the `defer` attribute to all script tags.  Increases page speed.
		"defer-all" => true,
		// Controls whether a manifest is used for enqueueing assets like scripts and css
		"use-manifest" => false,
		// The manifest to use
		"manifest" => "assets/manifest.json",
		// list the js files you want to enqueue
		"js" => [
			"theme.js"
		],
		// list the css files you want to enqueue
		"css" => [
			"theme.css"
		]
	],

	// WordPress theme options
	"support" => [
		"automatic-feed-links" => true,
		"title-tag" => true,
		"post-thumbnails" => [
			"width" => 288,
			"height" => 323,
			"crop" => true
		],
		"html5" => [
			"search-form",
			"comment-form",
			"comment-list",
			"gallery",
			"caption"
		]
	],

	// Menu options
	"menu" => [
		"primary" => "Primary",
        "secondary" => "Secondary",
        "social" => "Social",
		"footer" => "Footer"
	],

    // Sidebar Areas
	"sidebars" => [
	],

//    "shortcodes" => [
//        'code-block' => "\\ILab\\StemContent\\Models\\ShortCodes\\CodeBlockShortCode"
//    ],

    // Configure the WordPress content editor
    "editor" => [
    	// Additional editor styles to load
        "styles" => [
        ],
        // List of plugins to add
        "plugins" => [
        ]
    ],

    // Configure the customizer
    "customizer" => [
    	// Use kirki for customization or not.  You should use it though.
    	"use_kirki" => false,
//
//	    // Customizer Panels
//	    "panels" => [
//		    "stem-base-options" => [
//			    "title" => "Theme Options",
//			    "priority" => 100
//		    ]
//	    ],
//
//	    // Customizer sections
//	    "sections" => [
//		    "stem-theme-images" => [
//			    "title" => "Images",
//			    "panel" => "stem-base-options",
//			    "priority" => 100
//		    ]
//	    ],
//
//	    // Theme settings
//	    "settings" => [
//		    "background_image" => [
//			    "default" => null,
//			    "control" => [
//				    "label" => "Background Image",
//				    "section" => "stem-theme-images",
//				    "type" => "image"
//			    ],
//		        'output' => [
//		        	[
//		        		'element' => 'body',
//			            'property' => 'background-image'
//			        ]
//		        ]
//		    ],
//		    "logo_image" => [
//			    "default" => null,
//			    "control" => [
//				    "label" => "Logo Image",
//				    "section" => "stem-theme-images",
//				    "type" => "image"
//			    ],
//			    'output' => [
//				    [
//					    'element' => '.home-link',
//					    'property' => 'background-image'
//				    ]
//			    ]
//		    ]
//	    ]
    ],

	// Clean up generated HTML options
	"clean" => [
		// Removes the following text and regexes from the final output
		"remove" => [
			"text" => [
				"<!-- /all in one seo pack -->",
			    "<link rel='stylesheet' id='kirki-styles-global-css'  href='/app/plugins/kirki/assets/css/kirki-styles.css' type='text/css' media='all' />"
			],
			"regex" => [
				"#<!-- All in One (.*) -->#",
				"#<!-- (.*)The Seo Framework(.*) -->#"
			]
		],

		// Replaces the following text and regexes from the final output
		"replace" => [
			"text" => [
			],
			"regex" => [
			]
		],

		// Unsets these actions
		"wp_head" => [
			"rsd_link",
			"wlwmanifest_link",
			"wp_generator",
			"start_post_rel_link",
			"index_rel_link",
			"parent_post_rel_link",
			"adjacent_posts_rel_link_wp_head",
			"wp_shortlink_wp_head"
		],

		// Removes these headers
		"headers" => [
			"X-Pingback"
		]
	]
];