<?php

/**
 * This is the main configuration for your app.
 */

return [
	// Namespace for the theme
	"namespace" => "\\stem",

	// Text domain
	"text-domain" => "stem",

	"options" => [
		// List of WordPress plugins this theme requires or recommends
		// For options, view the docs at http://tgmpluginactivation.com/configuration/
		"plugins" => [
		],

		// Disables XML-RPC
		"disable-xml-rpc" => true,
		// Disables WordPress's JSON API
		"disable-wp-json-api" => true,
		// Disables WordPress's dumb emoji nonsense
		"disable-emoji" => true,
		// Disable RSS
		"disable-rss" => true,

		// Controls caching HTTP headers
		"cache-control" => [
			// Enables/disable sending cache control headers
			"enabled" => true,
			// Turns on cache control headers metabox on posts and pages
			"metabox" => true,
			// Default cache-control values
			"default" => [
				// Can be: public | private | no-store | no-cache | no-store, no-cache
				"cache-control" => "public",
				// Max age to cache on proxy or browser in seconds
				"max-age" => 3200,
				// Max age to cache on proxy
				"s-maxage" => 86400
			]
		]
	],

	// Configuration for logging
	"logging" => [
		// For development environment
		"development" => [
			// For debug AND GREATER error levels
			"debug" => [
				// error_log()
				"phperror" => [
					"format" => [
						"output" => "%level_name% > %message% %context%",
						"date" => ""
					]
				],

				// Will log message to the browser's js console via console.log()
				"browser" => [],

				// syslog
				"syslog" => [
					"ident" => "stem"
				],

			]
		],

		// For production environment
		"production" => [
			// For error AND GREATER error levels
			"error" => [
				// error_log()
				"phperror" => [],
			],

			// for emergency error levels
			"emergency" => [
				"mail" => [
					"to" => "jon@interfacelab.com",
					"from" => "donotreply@interfacelab.com",
					"subject" => "Emergency on production"
				]
			]
		]
	],

	// search options
	"search-options" =>[
		// Post types to include in search
		"post-types" =>[
			"post"
		],
		"search_tags" => true
	],

	// Page Controllers
	// This maps a "template" to a page controller.  These "templates" will be available when editing
	// pages with the WordPress admin.
	"page-controllers" => [
//        "Template Name" => "\\YourNamespace\\Controllers\\YourController",
	],

	// Custom post types to model map
	// This will map a post with a specific "post_type" to a model
	"model-map" => [
//        "model" =>  "\\YourNamespace\\Models\\YourModel",
	]
];