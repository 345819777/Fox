<?php
use yii\helpers\Url;
?>
<ul class="support_tabs_nav">
            <li><a href="<?php echo Url::to(['faqs/index']);?>" class="support_tabs_nav_cta tab active">FAQs</a></li>
            <li><a href="<?php echo Url::to(['downloads/index']);?>" class="support_tabs_nav_cta tab">Downloads</a></li>
            <li><a href="<?php echo Url::to(['video/index']);?>" class="support_tabs_nav_cta tab">Videos</a></li>
</ul>