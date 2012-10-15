<?php
$piwikUrl = GP_PIWIK_DOMAIN;
$piwikPath = untrailingslashit(GP_PIWIK_PATH);
if ( $piwikPath ) {
    $piwikUrl .= "/$piwikPath";
}
$piwikSite = (int)GP_PIWIK_SITE;
if ( $piwikSite && $piwikUrl ) {
?><!-- Piwik -->
<script type="text/javascript">
    var pkBaseURL = (("https:" == document.location.protocol) ? "https://<?php echo $piwikUrl ?>/" : "http://<?php echo $piwikUrl ?>/");
    document.write(decodeURI("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
    try {
        var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", <?php echo $piwikSite ?>);
        piwikTracker.trackPageView();
        piwikTracker.enableLinkTracking();
    } catch( err ) {}
</script><noscript><p><img src="http://<?php echo $piwikUrl ?>/piwik.php?idsite=<?php echo $piwikSite ?>" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code --><?php
}
