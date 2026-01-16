<?php
/**
 * Front Page Template
 * 7 Figure Affiliate Theme
 */

get_header();
?>

<div class="site-content bg-slate-950 text-slate-100">
    <!-- Hero -->
    <section class="relative isolate overflow-hidden px-6 pb-24 pt-20 sm:pt-24">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(16,185,129,0.12),_transparent_35%)]"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900/90 via-slate-950/95 to-slate-950"></div>

        <div class="relative max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="space-y-6">
                <span class="inline-flex items-center gap-2 rounded-full bg-emerald-500/10 px-4 py-2 text-sm font-semibold text-emerald-300 ring-1 ring-emerald-400/30">2026 · Make Money Online - BizOps</span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight text-white">
                    Build a Recession-Proof Income by Affiliate Marketing Proven Products
                </h1>
                <p class="text-lg sm:text-xl text-slate-200 max-w-2xl">
                    Get The Step-by-Step Blueprint to $5k/Month. No fluff—just actionable, battle-tested, blueprint to follow.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="rounded-xl bg-white/5 px-4 py-3 ring-1 ring-white/10">
                        <p class="text-3xl font-bold text-white">$50M+</p>
                        <p class="text-sm text-slate-300">Affiliate commissions generated</p>
                    </div>
                    <div class="rounded-xl bg-white/5 px-4 py-3 ring-1 ring-white/10">
                        <p class="text-3xl font-bold text-white">10K+</p>
                        <p class="text-sm text-slate-300">Students coached worldwide</p>
                    </div>
                    <div class="rounded-xl bg-white/5 px-4 py-3 ring-1 ring-white/10">
                        <p class="text-3xl font-bold text-white">$5K/Month</p>
                        <p class="text-sm text-slate-300">Blueprint you can copy today</p>
                    </div>
                </div>

            <div id="lead-magnet" class="relative">
                <div class="rounded-2xl bg-white shadow-2xl shadow-emerald-500/20 ring-1 ring-slate-200">
                    <div class="space-y-6 p-8">
                        <div class="flex items-center gap-3">
                            <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 font-bold">7F</span>
                            <div>
                                <p class="text-sm font-semibold text-emerald-600">Free Training</p>
                                <p class="text-lg font-bold text-slate-900">Blueprint to $5k/Month</p>
                            </div>
                        </div>
                        <p class="text-base text-slate-600">Enter your details to get the exact step-by-step blueprint I use to turn traffic into commissions.</p>

                        <form id="lead-magnet-form" class="space-y-4">
                            <div class="space-y-2">
                                <label for="lead-magnet-name" class="text-sm font-semibold text-slate-700">Name</label>
                                <input type="text" id="lead-magnet-name" placeholder="Your name" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-200" required>
                            </div>
                            <div class="space-y-2">
                                <label for="lead-magnet-email" class="text-sm font-semibold text-slate-700">Email</label>
                                <input type="email" id="lead-magnet-email" placeholder="your_email@example.com" class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-200" required>
                            </div>
                            <button type="submit" class="w-full rounded-lg bg-emerald-500 px-4 py-3 text-base font-bold text-slate-900 shadow-md shadow-emerald-300/40 transition hover:bg-emerald-400">Blueprint to $5k/Month</button>
                        </form>

                        <div class="flex items-start gap-3 text-sm text-slate-500">
                            <span class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-emerald-100 text-emerald-600">✓</span>
                            <p>No spam ever. Unsubscribe anytime.</p>
                        </div>
                        <div id="lead-magnet-message" class="text-sm font-semibold" aria-live="polite"></div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="<?php echo esc_url(home_url('/products/7-figure-affiliate-system')); ?>" class="inline-flex items-center justify-center rounded-lg bg-slate-900 px-6 py-3 text-sm font-semibold text-white shadow-md transition hover:-translate-y-0.5">7 Figure Affiliate System</a>
                <a href="<?php echo esc_url(home_url('/products')); ?>" class="inline-flex items-center justify-center rounded-lg bg-white px-6 py-3 text-sm font-semibold text-slate-900 shadow-md transition hover:-translate-y-0.5">View All Products</a>  
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <section class="bg-slate-900/60 border-y border-white/5 px-6 py-10">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-items-center opacity-70 grayscale transition duration-500 hover:grayscale-0 hover:opacity-100">
                 <!-- JVZoo -->
                 <div class="flex items-center justify-center gap-2">
                    <span class="text-2xl font-black text-white italic">JVZoo</span>
                    <span class="text-[0.6rem] uppercase tracking-widest text-emerald-500 font-bold border border-emerald-500 px-1 rounded">Top Seller</span>
                 </div>
                 <!-- WarriorPlus -->
                 <div class="flex items-center justify-center gap-1">
                    <span class="text-2xl font-black text-red-600">W+</span>
                    <span class="text-lg font-bold text-white">WarriorPlus</span>
                 </div>
                 <!-- ClickBank -->
                 <div class="flex items-center justify-center gap-2">
                     <span class="text-xl font-black text-white">ClickBank</span>
                     <span class="text-[0.6rem] bg-white text-slate-900 px-1 py-0.5 font-bold uppercase tracking-wider">Platinum</span>
                 </div>
                 <!-- Digistore24 -->
                 <div class="flex items-center justify-center gap-1">
                    <span class="text-2xl font-black text-blue-500">DS</span>
                    <span class="text-lg font-bold text-white">Digistore24</span>
                 </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="px-6 py-20 bg-white text-slate-900">
        <div class="max-w-6xl mx-auto space-y-10">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div class="space-y-3">
                    <p class="inline-flex items-center gap-2 rounded-full bg-slate-900 text-white px-3 py-1 text-sm font-semibold">Featured products</p>
                    <h2 class="text-4xl font-bold">The Fastest Path to Your Next Revenue Milestone</h2>
                    <p class="text-lg text-slate-600">Handpicked offers—start with the right product and stack results.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                $featured = new WP_Query(array(
                    'post_type' => 'affiliate_product',
                    'posts_per_page' => 3,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                ));

                if ($featured->have_posts()) {
                    while ($featured->have_posts()) {
                        $featured->the_post();
                        $is_best_seller = $featured->current_post === 0;
                        $affiliate_link = get_post_meta(get_the_ID(), '_affiliate_link', true);
                        $price = get_post_meta(get_the_ID(), '_price_point', true);
                        $subtitle = get_post_meta(get_the_ID(), '_product_subtitle', true);
                        $features = get_post_meta(get_the_ID(), '_key_features', true);
                        ?>
                        <div class="product-card bg-white border border-slate-200 rounded-2xl shadow-sm hover:shadow-lg transition overflow-hidden flex flex-col relative <?php echo $is_best_seller ? 'ring-2 ring-emerald-500 shadow-emerald-500/10' : ''; ?>">
                            <?php if ($is_best_seller) { ?>
                                <div class="absolute top-0 right-0 z-10 rounded-bl-xl bg-emerald-500 px-4 py-1 text-xs font-bold uppercase tracking-wide text-white shadow-sm">
                                    Best Seller
                                </div>
                            <?php } ?>

                            <?php if (has_post_thumbnail()) { ?>
                                <div class="product-image h-56 md:h-60 overflow-hidden bg-slate-100">
                                    <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover', 'loading' => 'lazy')); ?>
                                </div>
                            <?php } else { ?>
                                <div class="product-image h-56 md:h-60 bg-slate-200 flex items-center justify-center">
                                    <span class="text-slate-400"><?php esc_html_e('Product Image', '7-figure-affiliate'); ?></span>
                                </div>
                            <?php } ?>

                            <div class="p-6 flex flex-col flex-1">
                                <div class="flex items-start justify-between gap-4">
                                    <h3 class="text-xl font-bold text-slate-900 mb-2"><?php the_title(); ?></h3>
                                    <?php if ($price) { ?>
                                        <span class="text-xs font-bold text-slate-900 bg-amber-100 px-3 py-1 rounded-full"><?php echo esc_html($price); ?></span>
                                    <?php } ?>
                                </div>

                                <?php if ($subtitle) { ?>
                                    <p class="text-xs uppercase tracking-[0.2em] text-amber-600 font-semibold mb-3"><?php echo esc_html($subtitle); ?></p>
                                <?php } ?>

                                <p class="text-slate-600 mb-5 text-sm leading-relaxed"><?php echo wp_trim_words(get_the_excerpt(), 26); ?></p>

                                <?php if (!empty($features) && is_array($features)) { ?>
                                    <div class="mb-5">
                                        <p class="text-sm font-semibold text-slate-700 mb-2"><?php esc_html_e('What you get', '7-figure-affiliate'); ?></p>
                                        <ul class="text-sm text-slate-600 space-y-2">
                                            <?php 
                                            $features_to_show = array_slice($features, 0, 3);
                                            foreach ($features_to_show as $feature) {
                                                echo '<li class="flex items-start"><span class="text-amber-500 mr-2">✓</span><span>' . esc_html($feature) . '</span></li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                <?php } ?>

                                <div class="mt-auto flex flex-col sm:flex-row gap-3">
                                    <a href="<?php the_permalink(); ?>" class="flex-1 text-center bg-slate-900 hover:bg-slate-800 text-white font-bold py-2.5 rounded transition text-sm">
                                        <?php esc_html_e('See Details', '7-figure-affiliate'); ?>
                                    </a>
                                    <?php if ($affiliate_link) { ?>
                                        <a href="<?php echo esc_url($affiliate_link); ?>" target="_blank" rel="noopener noreferrer" class="flex-1 text-center bg-amber-500 hover:bg-amber-600 text-white font-bold py-2.5 rounded transition text-sm">
                                            <?php esc_html_e('Get Instant Access', '7-figure-affiliate'); ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="px-6 py-20 bg-slate-900 text-slate-50">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-4">
                <p class="inline-flex items-center gap-2 rounded-full bg-emerald-500/10 px-3 py-1 text-sm font-semibold text-emerald-300 ring-1 ring-emerald-400/30">Meet Michael Cheney</p>
                <h2 class="text-4xl font-bold text-white">7 Figure Affiliate Marketer at the Top of the Leaderboards for Over Two Decades</h2>
                <p class="text-lg text-slate-200">Michael's products focus on affiliate marketing, from software to point-and-click trainings. All products are engineered to convert in any market condition.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="rounded-xl bg-white/5 p-4 ring-1 ring-white/10">
                        <p class="text-3xl font-bold text-white">20+</p>
                        <p class="text-sm text-slate-200">Years building & promoting high-converting products</p>
                    </div>
                    <div class="rounded-xl bg-white/5 p-4 ring-1 ring-white/10">
                        <p class="text-3xl font-bold text-white">10k+</p>
                        <p class="text-sm text-slate-200">Students across 30+ countries</p>
                    </div>
                    <div class="rounded-xl bg-white/5 p-4 ring-1 ring-white/10">
                        <p class="text-3xl font-bold text-white">$50M+</p>
                        <p class="text-sm text-slate-200">Commissions generated</p>
                    </div>
                    <div class="rounded-xl bg-white/5 p-4 ring-1 ring-white/10">
                        <p class="text-3xl font-bold text-white">1 Day/Week</p>
                        <p class="text-sm text-slate-200">Coaching and accountability</p>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/about-michael')); ?>" class="inline-flex items-center justify-center gap-2 rounded-lg bg-white text-slate-900 px-5 py-3 text-sm font-semibold shadow-sm transition hover:-translate-y-0.5">Learn More About Michael</a>
            </div>
            <div class="about-image relative">
                <?php
                $about_page = get_page_by_path('about-michael');
                if ($about_page && has_post_thumbnail($about_page->ID)) {
                    echo wp_get_attachment_image(get_post_thumbnail_id($about_page->ID), 'large', false, array('class' => 'w-full rounded-2xl shadow-2xl shadow-emerald-500/20 ring-1 ring-white/10 object-cover')); 
                } else {
                    echo '<div class="rounded-2xl bg-white/10 p-10 text-center text-slate-300 ring-1 ring-white/15">Michael Cheney Photo</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Proof Section -->
    <section class="px-6 py-20 bg-slate-50 text-slate-900">
        <div class="max-w-6xl mx-auto space-y-10">
            <div class="space-y-4 max-w-3xl">
                <p class="inline-flex items-center gap-2 rounded-full bg-emerald-100 px-3 py-1 text-sm font-semibold text-emerald-700 ring-1 ring-emerald-200">Testimonials</p>
                <h2 class="text-4xl font-bold">Real Students. Real Results.</h2>
                <p class="text-lg text-slate-600">What others are saying about promoting products created by 7 figure affiliate marketer Michael Cheney.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                    <div class="flex items-center gap-3">
                        <div class="text-amber-500">★★★★★</div>
                        <p class="text-sm font-semibold text-slate-700">10k/Months</p>
                    </div>
                    <p class="mt-3 text-slate-700">"This system completely transformed my online business. I went from struggling to make $100/month to generating 5-figure months consistently."</p>
                    <p class="mt-4 font-bold text-slate-900">Sarah Johnson</p>
                </div>
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                    <div class="flex items-center gap-3">
                        <div class="text-amber-500">★★★★★</div>
                        <p class="text-sm font-semibold text-slate-700">Leaderboard Takeover</p>
                    </div>
                    <p class="mt-3 text-slate-700">"Michael's strategies are pure gold. The point-and-click approach made it easy to implement and see results quickly."</p>
                    <p class="mt-4 font-bold text-slate-900">Mike Rodriguez</p>
                </div>
                <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
                    <div class="flex items-center gap-3">
                        <div class="text-amber-500">★★★★★</div>
                        <p class="text-sm font-semibold text-slate-700">Recurring Revenue</p>
                    </div>
                    <p class="mt-3 text-slate-700">"I've tried many programs, but this is the first one that actually works for me. It works on autopilot, while I sleep, and when I walk away. The support and community are incredible."</p>
                    <p class="mt-4 font-bold text-slate-900">Jessica Lee</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Action Steps -->
    <section class="px-6 py-20 bg-white text-slate-900">
        <div class="max-w-6xl mx-auto space-y-12">
            <div class="max-w-3xl space-y-4">
                <p class="inline-flex items-center gap-2 rounded-full bg-slate-900 text-white px-3 py-1 text-sm font-semibold">How it works</p>
                <h2 class="text-4xl font-bold">Launch Your Next Winning Promo This Week</h2>
                <p class="text-lg text-slate-600">Follow the same process Michael Cheney uses to dominate launches.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex h-full flex-col rounded-2xl bg-slate-50 p-6 ring-1 ring-slate-200">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-emerald-100 text-lg font-bold text-emerald-700">1</div>
                    <h3 class="mt-4 text-xl font-bold">Claim The Blueprint</h3>
                    <p class="mt-2 text-slate-600">Download The Step-by-Step Blueprint to $5k/Month and simply take action on each step.</p>
                </div>
                <div class="flex h-full flex-col rounded-2xl bg-slate-50 p-6 ring-1 ring-slate-200">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-emerald-100 text-lg font-bold text-emerald-700">2</div>
                    <h3 class="mt-4 text-xl font-bold">Plug & Play</h3>
                    <p class="mt-2 text-slate-600">Use the JV pages for each product to get pre-written swipes, bridge page templates, and more.. This will get your promo live in hours.</p>
                </div>
                <div class="flex h-full flex-col rounded-2xl bg-slate-50 p-6 ring-1 ring-slate-200">
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-emerald-100 text-lg font-bold text-emerald-700">3</div>
                    <h3 class="mt-4 text-xl font-bold">Learn From Feedback</h3>
                    <p class="mt-2 text-slate-600">Join weekly webinars, refine your approach, and rinse-&-repeat with new offers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="px-6 py-20 bg-slate-900 text-slate-50">
        <div class="max-w-6xl mx-auto space-y-10">
            <div class="max-w-3xl space-y-4">
                <p class="inline-flex items-center gap-2 rounded-full bg-emerald-500/10 px-3 py-1 text-sm font-semibold text-emerald-300 ring-1 ring-emerald-400/30">Frequently asked</p>
                <h2 class="text-4xl font-bold text-white">Everything You Need To Know Before Jumping In</h2>
                <p class="text-lg text-slate-200">Still unsure? Here are quick answers to the most common questions from new affiliates.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="rounded-2xl bg-white/5 p-6 ring-1 ring-white/10">
                    <h3 class="text-lg font-semibold text-white">Do I need previous experience?</h3>
                    <p class="mt-2 text-slate-200">No. The blueprint + any product will include walkthroughs, templates, and examples you can copy without a list or ad budget at any level of experience.</p>
                </div>
                <div class="rounded-2xl bg-white/5 p-6 ring-1 ring-white/10">
                    <h3 class="text-lg font-semibold text-white">How fast can I launch?</h3>
                    <p class="mt-2 text-slate-200">This depends on how hard you are willing to work. By using the done-for-you swipe files, bridge page layouts, and A.I. launching has never been easier.</p>
                </div>
                <div class="rounded-2xl bg-white/5 p-6 ring-1 ring-white/10">
                    <h3 class="text-lg font-semibold text-white">What makes this different?</h3>
                    <p class="mt-2 text-slate-200">Michael Cheney is a savvy affiliate marketer earning 7 figures with over 25+ years of experience. Plus weekly live coaching webinars so if you're ever stuck getting help is simple.</p>
                </div>
                <div class="rounded-2xl bg-white/5 p-6 ring-1 ring-white/10">
                    <h3 class="text-lg font-semibold text-white">Can I cancel anytime?</h3>
                    <p class="mt-2 text-slate-200">Yes—there are no long-term contracts. If it's not a fit, cancel and keep the launch assets you've downloaded. Most products have a 30 day money back guarantee.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="relative overflow-hidden px-6 py-20 bg-gradient-to-r from-emerald-500 via-emerald-400 to-emerald-500 text-slate-900">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_rgba(255,255,255,0.35),_transparent_50%)]"></div>
        <div class="relative max-w-5xl mx-auto text-center space-y-6">
            <p class="inline-flex items-center justify-center gap-2 rounded-full bg-white/70 px-4 py-2 text-sm font-semibold text-emerald-800">Ready when you are</p>
            <h2 class="text-4xl font-bold">Your 7 Figure Affiliate Journey Starts With One Decision</h2>
            <p class="text-lg text-emerald-900">Grab The Blueprint, Launch Your First Promo, and Join a Community of High-Performing Affiliates</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#lead-magnet" class="inline-flex items-center justify-center rounded-lg bg-slate-900 px-6 py-3 text-sm font-semibold text-white shadow-md transition hover:-translate-y-0.5">Get The $5k/Month Blueprint</a>
                <a href="<?php echo esc_url(home_url('/products')); ?>" class="inline-flex items-center justify-center rounded-lg bg-white px-6 py-3 text-sm font-semibold text-slate-900 shadow-md transition hover:-translate-y-0.5">View All Products</a>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
