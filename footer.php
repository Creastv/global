</div>
</div>
<?php if(is_singular('post')) { ?>
<?php get_template_part( 'templates-parts/parts/articles' ); ?>
<?php } ?>
</main>

<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
    <?php get_template_part('templates-parts/footer/footer', 'banner'); ?>
    <div class="container">
        <div class="f__main row">
            <?php get_template_part('templates-parts/footer/footer', 'main'); ?>
        </div>
        <div class="row">
            <?php get_template_part('templates-parts/footer/footer', 'info'); ?>
        </div>
    </div>
    <svg class="f__ornament" xmlns="http://www.w3.org/2000/svg" width="1131.994" height="650.87" viewBox="0 0 1131.994 650.87">
    <g id="Group_11" data-name="Group 11" transform="translate(-1065.01 -1585.999)" opacity="0.149">
        <path id="Rectangle_3_copy_2" data-name="Rectangle 3 copy 2" d="M1618.893,1586H1825.63L1269.746,2221.67H1063.01Z" transform="translate(2 0)" fill="#fff" opacity="0.302"/>
        <path id="Rectangle_4_copy" data-name="Rectangle 4 copy" d="M1814.991,1601.2H1989.8l-555.884,635.671H1259.108Z" fill="#fff" opacity="0.4"/>
        <path id="Rectangle_3_copy_2-2" data-name="Rectangle 3 copy 2" d="M1990.259,1601.2H2197l-559.7,635.669H1433.762Z" fill="#fff" opacity="0.6"/>
    </g>
    </svg>

</footer>

<span id="go-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path d="M6,18l2.115,2.115,8.385-8.37V30h3V11.745l8.37,8.385L30,18,18,6Z" transform="translate(-6 -6)" />
    </svg>
</span>
<?php wp_footer(); ?>
</body>
</html>