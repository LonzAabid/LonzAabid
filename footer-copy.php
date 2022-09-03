
    </section>  <!--   Grid Container End  -->
<?php /*    
 
    ...Footer Section
 
    */
    $dir = get_template_directory_uri();
?>
    <!-- ----  Related Posts After Article ------ -->
<?php if(is_single()) {
    get_template_part( 'template-parts/content', 'related' ); 
    } ?>

<footer class="edutheme-footer">
    <?php 
        if(is_single())
        {
    ?>
    <div id="scroll-to-top-div"> 

        <span id="scroll-to-top-text">
            <a href="#">
                Back To Top
            </a>
        </span>
        
        <span id="scroll-to-top-btn">
            <a href="#">
                <svg id="svg" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                    <g id="svg-id" fill="#0000" stroke-width="5px">
                        <circle cx="20" cy="20" r="18" stroke-width="2px" />
                        <line x1="10" y1="22" x2="20" y2="14" stroke-linecap="round"/>
                        <line x1="20" y1="14" x2="30" y2="22" stroke-linecap="round" />
                    </g>
                </svg>
            </a>
        </span>
        
    </div>
    <?php 
        }
    ?>
    
    <aside class="sidebar-footer-flex">
            <?php dynamic_sidebar('sidebar-footer');  ?>
    </aside>

    <div class="copyright">
        copyright 
        <?php 
        $year = '';
        $year = date('Y');
        echo $year;
        ?>
        &copy; 
        <?php $site_name = get_site_url( '' );
        echo str_replace('http://', '', $site_name);
        ?>
    </div>
 

</footer>
    
<?php wp_footer(); 
if(is_single( )):?>

<div class="footer-sticky-ad" id="footer-sticky-ad">
<div class="footer-sticky-ad-close" onclick='document.getElementById("footer-sticky-ad").style.display="none"'>
    <svg width="40" height="40" viewBox="0 0 40 40"><g fill="#0000" stroke="#000" stroke-width="3px">
        <line x1="5" y1="4" x2="36" y2="36" stroke-linecap="round"/>
        <line x1="4" y1="36" x2="35" y2="4" stroke-linecap="round"/></g>
        </svg>
</div>
    <div class="footer-sticky-ad-content-mobile">
        Mobile
    </div>
    <div class="footer-sticky-ad-content-desktop">
        Desktop
    </div>
</div>
<style>
    .footer-sticky-ad-content-desktop { display: none; }
    .footer-sticky-ad { position: fixed; bottom: 0; left: 0; width: 100%; min-height: 50px; max-height: 90px; padding: 5px 5px; box-shadow: 0 -0.3rem 1rem 0 rgba(9,32,76,.2); display: flex; align-items: center; justify-content: center; background-color: #ffffffd9; z-index: 29; }
    .footer-sticky-ad-close { width: 1.5rem; height: 1.5rem; padding: 0.2rem; cursor: pointer;display: flex; place-items:center;border-radius: 2px; position: absolute; right: 0.5rem; top: -1.4rem; background-color: #fefefe; box-shadow: -4px -6px 18px 0 rgba(9,32,76,.3); }
        .footer-sticky-ad-close svg { width: auto; height: auto; fill: #000; }
    .footer-sticky-ad-content-mobile { overflow: hidden;  position: relative; height: 50px; width: 100%; text-align: center; margin-inline: auto; }
    @media (min-width: 768px ){
    .footer-sticky-ad-content-desktop { overflow: hidden;  position: relative; max-height: 90px; width: 100%; text-align: center; margin-inline: auto; height: 70px; }
    .footer-sticky-ad-content-mobile { display: none; }
    .footer-sticky-ad-content-desktop { display: block; }
    }
</style>
<?php endif;
?>

</body>
</html>

