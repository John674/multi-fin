<?php
/**
 * Register ACF blocks
 */
add_action('acf/init', function () {
    // check function exists.
    if (function_exists('acf_register_block_type')) {
        $blocks = [
            [
                'name' => 'header',
                'title' => __('Header'),
                'supports' => [
                    'align' => true,
                    'jsx' => true,
                    'className' => true,
                    'anchor' => true,
                    'mode' => 'edit'
                ]
            ]
        ];
        foreach ($blocks as $block) {

            // Register a testimonial block.
            $blockConfig = [
                'render_callback' => 'multi_fin_acf_block_render_callback',
                // Specifying an anonymouse function
                'enqueue_assets' => function () {
                },
            ];
            $blockConfig = array_merge_recursive($blockConfig, $block);
            acf_register_block_type($blockConfig);

        }
        function multi_fin_acf_block_render_callback($block, $content, $is_preview, $post_id)
        {
            $post = $GLOBALS['post'] ?? get_post($post_id);


            $blockName = str_replace('acf/', '', $block['name']);
            $pageName = PAGE_NAME_ID_MAP[$post->ID] ?? $post->post_name;
            $pageParentName = PAGE_NAME_ID_MAP[$post->post_parent] ?? $pageName;

            $templatePathForPage = get_template_directory() . "/template-parts/blocks/$pageName/$blockName.php";
            $templatePathForParentPage = get_template_directory() . "/template-parts/blocks/$pageParentName/$blockName.php";
            $args = ['post' => $post];


            if (file_exists($templatePathForPage)) {
                get_template_part("/template-parts/blocks/$pageName/$blockName", '', $args);
            } elseif (file_exists($templatePathForParentPage)) {
                get_template_part("/template-parts/blocks/$pageParentName/$blockName", '', $args);
            } else {
                get_template_part("/template-parts/blocks/$blockName", '', $args);
            }
        }
    }

});

