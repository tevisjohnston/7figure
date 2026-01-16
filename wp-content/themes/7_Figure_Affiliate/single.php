<?php
/**
 * Single Blog Post Template
 * 7 Figure Affiliate Theme
 */

get_header();
?>

<div class="site-content">

    <?php
    while (have_posts()) {
        the_post();
        $categories = get_the_category();
        $tags = get_the_tags();
    ?>

    <!-- Hero Section -->
    <section class="post-hero bg-gradient-to-r from-slate-900 to-slate-700 text-white py-16 px-6">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center gap-2 mb-4 text-sm">
                <span><?php echo esc_html(get_the_date()); ?></span>
                <span>•</span>
                <span><?php esc_html_e('By', '7-figure-affiliate'); ?> <?php the_author(); ?></span>
                <?php if ($categories) : ?>
                    <span>•</span>
                    <?php foreach ($categories as $category) : ?>
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="hover:text-amber-400 transition">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail rounded-lg overflow-hidden mt-8">
                    <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Content Section -->
    <section class="post-content py-16 px-6 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="prose prose-lg max-w-none text-slate-700">
                <?php the_content(); ?>
            </div>

            <?php if ($tags) : ?>
                <div class="post-tags mt-8 pt-6 border-t border-slate-200">
                    <div class="flex items-center gap-2 flex-wrap">
                        <span class="text-sm font-bold text-slate-700"><?php esc_html_e('Tags:', '7-figure-affiliate'); ?></span>
                        <?php foreach ($tags as $tag) : ?>
                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="tfaf-badge tfaf-badge-tag hover:bg-slate-300 transition">
                                <?php echo esc_html($tag->name); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Author Bio Section -->
    <section class="author-bio py-16 px-6 bg-slate-50">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold mb-8 text-slate-900"><?php esc_html_e('About the Author', '7-figure-affiliate'); ?></h2>

            <div class="bg-white rounded-lg p-8 flex gap-6 items-start">
                <div class="flex-shrink-0">
                    <?php echo get_avatar(get_the_author_meta('ID'), 96, '', '', array('class' => 'rounded-full')); ?>
                </div>
                <div class="flex-1">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">
                        <?php the_author(); ?>
                    </h3>
                    <?php if (get_the_author_meta('description')) : ?>
                        <div class="text-slate-700 mb-4">
                            <?php echo wpautop(wp_kses_post(get_the_author_meta('description'))); ?>
                        </div>
                    <?php else : ?>
                        <p class="text-slate-700 mb-4">
                            <?php
                            printf(
                                esc_html__('%s is a contributor to 7 Figure Affiliate, sharing insights on affiliate marketing and online business strategies.', '7-figure-affiliate'),
                                get_the_author()
                            );
                            ?>
                        </p>
                    <?php endif; ?>
                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="text-amber-500 hover:text-amber-600 font-semibold transition">
                        <?php esc_html_e('View all posts by', '7-figure-affiliate'); ?> <?php the_author(); ?> →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php } // end while ?>

</div>

<?php get_footer(); ?>
