<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
		'assetManager' => [
			'basePath' => '@webroot/frontend/web/assets',
			'baseUrl' => '@web/frontend/web/assets',
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'sourcePath' => null,
					'js' => []
				],
			],
		],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
			'suffix'=>'.html',
            'rules' => [
				'lang/<lang:[\w\d\-]+>'=>'site/index',
				'lang/<lang:[\w\d\-]+>'=>'site/index',
				'lang/<lang:[\w\d\-]+>'=>'site/index',
				'solution/<id:[\w\d\-]+>' => 'index/solutioninfo',
				'/company/how-to-be-distributor'=>'company/d',
				'company/<name:[\w\d\-]+>' => 'company/companyinfo',
				'newsinfo/<id:[\w\d\-]+>' => 'news/newsinfo',
				'where-to-buy/<cate:[\w\d\-\_]+>' => 'company/where_to_buy',
				'where-to-buy/net/<net:[\w\d\-\_]+>' => 'company/where_to_buy',
				'exhibitions' => 'news/exhibitions',
				
				'call-center'=>'company/callcenter',
				'Open-Source-Compliance'=>'company/opensourcecompliance',
				'sitemap'=>'company/sitemap',
				'faq'=>'cooperate/faq',
				'Cooperate/FAQinfo/id/<id:[\w\d\-\_]+>'=>'cooperate/faqinfo',
				'download-center/firmware-downloads'=>'cooperate/firmware',
				
				'download-center/software-tools'=>'cooperate/software',
				'download-center/app-for-mobile-phone'=>'cooperate/appphone',
				'download-center/vms'=>'cooperate/vms',
				'download-center/user-manual-for-app'=>'cooperate/appmanual',
				
				'download-center/user-manual'=>'cooperate/manual',
				'download-center/quick-installation-guide'=>'cooperate/guideall',
				'download-center/video-tutorial'=>'cooperate/videolist',
				'Cooperate/videoCate/name/<name:[\w\d\-\_]+>'=>'cooperate/videocate',
				'Cooperate/manualCate/name/<name:[\w\d\-\_]+>'=>'cooperate/manualcate',
				'Cooperate/guide'=>'cooperate/guide',
				'Cooperate/faqCate/name/<name:[\w\d\-\_]+>'=>'cooperate/faqcate',
				'/Support/faqdetail/id/<id:[\w\d\-\_]+>'=>'support/faqdetail',
				'/Support/faqview/id/<id:[\w\d\-\_]+>'=>'support/faqview',
				'/Support/faq'=>'support/faq',
				'/Faqs/view/id/<id:[\w\d\-\_]+>'=>'faqs/view',
										
				
				'products'=>'products/ip_camera',
				'products/<cate:[\w\d\s\-\_]+>'=>'products/ip_camera',
				'product/<id:[\w\d]+>'=>'products/info',
				'search'=>'products/search',
				
				//ÌØÊâ²úÆ·
				'C1'=>'products/c1',
				'C1Lite'=>'products/c1lite',
				'FosBaby'=>'products/fosbaby',
				
				'FI9803EP'=>'products/fi9803ep',
				'FI9821EP'=>'products/fi9821ep',
				'FI9831P'=>'products/fi9831p',
				'FI9851P'=>'products/fi9851p',
				'FI9853EP'=>'products/fi9853ep',
				'FI9805E'=>'products/fi9805e',
				'FI9903P'=>'products/fi9903p',
				'C2'=>'products/c2',
				'R2'=>'products/r2',
				'R4'=>'products/r4',
				'FosBaby_P1'=>'products/fosbaby_p1',
				'FI9900P'=>'products/fi9900p',
				'FI9800P'=>'products/fi9800p',
				'FI9805W'=>'products/fi9805w',
				
				'FI9803P'=>'products/fi9803p',
				'FI9816P'=>'products/fi9816p',
				'FI9821P'=>'products/fi9821p',
				'FI9826P'=>'products/fi9826p',
				'FI9828P'=>'products/fi9828p',
				'FI9900EP'=>'products/fi9900ep',
				'FN3108XE_B4_1T'=>'products/fn3108xe_b4_1t',
				'FN3108XE_B8_2T'=>'products/fn3108xe_b8_2t',
				'FN7108E_B4_2T'=>'products/fn7108e_b4_2t',
				'FN7108E_B8_2T'=>'products/fn7108e_b8_2t',
				'FI9901EP'=>'products/fi9901ep',
				'C2Black'=>'products/c2black',
				'R2Black'=>'products/r2black',
				'FI9961EP'=>'products/fi9961ep',
				'FN3108E_B4_1T'=>'products/fn3108e_b4_1t',
				'FN3108E_B8_2T'=>'products/fn3108e_b8_2t',
				'FN3104W'=>'products/FN3104W',
				'FN3104W_B4'=>'products/fn3104w_b4',
				'WaterproofJunctionBox'=>'products/waterproofjunctionbox',
				'FI9928P'=>'products/fi9928p',
				'FN7108HE'=>'products/fn7108he',
				'FAB28'=>'products/waterproofjunctionboxnew',
            ],
        ],
        
    ],
    'params' => $params,
];
