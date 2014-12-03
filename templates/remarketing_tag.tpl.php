<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = <?php print $conversion_id; ?>;
<?php if(!empty($conversion_label)):?>
var google_conversion_label = "<?php print $conversion_label; ?>";
<?php endif;?>
<?php if(!empty($custom_params)):?>
var google_custom_params = <?php print $custom_params; ?>;
<?php endif;?>
var google_remarketing_only = <?php print $remarketing_only; ?>;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="<?php print $src; ?>"/>
</div>
</noscript>

