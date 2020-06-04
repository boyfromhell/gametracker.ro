<?php

return [
    'default_collection' => 'docs',

    'collections' => [
        'docs' => [
            'disk' => 'docs',
            'sheet_class' => Spatie\Sheets\Sheet::class,
            'path_parser' => Spatie\Sheets\PathParsers\SlugParser::class,
            'content_parser' => Spatie\Sheets\ContentParsers\MarkdownWithFrontMatterParser::class,
            'extension' => 'md',
        ],
    ],
];
