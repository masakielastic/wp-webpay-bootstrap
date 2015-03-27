<?php
include '/path/to/wp-blog-header.php';

add_action('wp_head', function() use($app) {
	echo '<meta name="csrf-token" content="'. $app['session']->get('csrf-token') .'" />';
});
add_action( 'wp_enqueue_scripts', function() use($request) {
    wp_enqueue_script(
        'example.js',
        'https://example.org/path/to/web/js/example.js', [], null, true);
});

get_header();
?>

<div id="main-content" class="main-content">
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
      <article id="post-1" class="post-1 post type-post status-publish format-standard hentry category-1">
        <div class="entry-content">
          <h2>もみねこ堂カード決済</h2>

          <form id="paymentForm" action="#" method="post">
            <div>金額(円)</div>
            <input type="text" id="inputAmount" placeholder="金額を入力">
            <script
              src="https://checkout.webpay.jp/v2/"
              class="webpay-button"
              data-key="<?php echo $app['config']['public_key']; ?>"
              data-lang="ja"
              data-partial="true"
            ></script>
            <button type="submit" id ="paymentSubmit">支払う</button>
          </form>
          <div id="alertMsg" style="display: none;"><p></p></div>
        </div>
      </article>
    </div>
  </div>
</div>

<script>
// WebPay.testMode = true;
var payment_uri = "<?php echo $app['config']['payment_uri']; ?>";
</script>

<?php
get_sidebar();
get_footer();