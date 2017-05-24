<ul>

        	<li>
                <a href="/downloads/index.html">
				<?php if($action == 'index'){ ?>
                    <img src="/Public/Home/images/faq/Firmware_2.png" />
				<?php }else{ ?>
                    <img src="/Public/Home/images/faq/Firmware_1.png" onmouseover="icon_atu('/Public/Home/images/faq/Firmware_2.png')" onmouseout="icon_atu('/Public/Home/images/faq/Firmware_1.png')" id="icon_a" />  
				<?php } ?>
                </a>
                <p><a href="/downloads/index.html">Firmware</a></p>
            </li>
            <li>
            	<a href="/downloads/app_software.html">
				<?php if($action == 'app_software'){ ?>
                <img src="/Public/Home/images/faq/App-&-Software_2.png" />
                <?php }else{ ?>
                <img src="/Public/Home/images/faq/App-&-Software_1.png" onmouseover="icon_btu('/Public/Home/images/faq/App-&-Software_2.png')" onmouseout="icon_btu('/Public/Home/images/faq/App-&-Software_1.png')" id="icon_b" />
                <?php } ?>
                </a>
                <p><a href="/downloads/app_software.html">App & Software</a></p>
            </li>
            <li>
            	<a href="/downloads/quick_installation_guide.html">
				<?php if($action == 'quick_installation_guide' || $action == 'quick_installation_guide_lang'){ ?>
                <img src="/Public/Home/images/faq/User-Mannual_2.png" />
                <?php }else{ ?>
                <img src="/Public/Home/images/faq/QIG_1.png" onmouseover="icon_ctu('/Public/Home/images/faq/QIG_2.png')" onmouseout="icon_ctu('/Public/Home/images/faq/QIG_1.png')" id="icon_c" />
                <?php } ?>
                </a>
                <p><a href="/downloads/quick_installation_guide.html">Quick Installtion Guide</a></p>
            </li>
            <li>
            	<a href="/downloads/user_mannual.html">
				<?php if($action == 'user_mannual'){ ?>
                <img src="/Public/Home/images/faq/User-Mannual_2.png" />
                <?php }else{ ?>
                <img src="/Public/Home/images/faq/User-Mannual_1.png" onmouseover="icon_dtu('/Public/Home/images/faq/User-Mannual_2.png')" onmouseout="icon_dtu('/Public/Home/images/faq/User-Mannual_1.png')" id="icon_d" />
                <?php } ?>
                </a>
                <p><a href="/downloads/user_mannual.html">User Mannual</a></p>
            </li>

</ul>