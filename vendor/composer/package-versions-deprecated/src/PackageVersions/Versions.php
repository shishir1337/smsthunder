<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'codeglen/ultimatesms';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'alexandr-mironov/php8-smpp' => 'dev-main@083d30e12f2e8ac7552d9a0ded11b812a9d2142f',
  'arcanedev/no-captcha' => '13.0.0@16ff6e2e88c9e899d65cb2b55e2b494e7599f1f1',
  'arcanedev/php-html' => '6.0.0@afc9cd7a9403b6856778b214638620e74f1390bd',
  'arcanedev/support' => '9.0.0@046d87b2d638cd0687b4ba06991947df2422970d',
  'arielmejiadev/larapex-charts' => '2.1.1@821f9a99c47e51f7306d04c2eeb7c6c3ee9f1e1b',
  'asm89/stack-cors' => 'v2.1.1@73e5b88775c64ccc0b84fb60836b30dc9d92ac4a',
  'authorizenet/authorizenet' => '2.0.2@a3e76f96f674d16e892f87c58bedb99dada4b067',
  'aws/aws-crt-php' => 'v1.0.2@3942776a8c99209908ee0b287746263725685732',
  'aws/aws-sdk-php' => '3.227.0@88d803113ade68604ec03c591d65e1e44406ab8e',
  'benmorel/gsm-charset-converter' => '0.2.4@6e9188fc10e2ee1f0851427f92958b63fe5cc4fb',
  'box/spout' => 'v3.3.0@9bdb027d312b732515b884a341c0ad70372c6295',
  'braintree/braintree_php' => '5.5.0@8902a072ac04c9eea2996f2683cb56259cbe46fa',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'dflydev/dot-access-data' => 'v3.0.1@0992cc19268b259a39e86f296da5f0677841f42c',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/dbal' => '2.13.9@c480849ca3ad6706a39c970cdfe6888fa8a058b8',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'dragonmantank/cron-expression' => 'v3.3.1@be85b3f05b46c39bbc0d95f6c071ddff669510fa',
  'egulias/email-validator' => '3.2.1@f88dcf4b14af14a98ad96b14b2b317969eab6715',
  'ezyang/htmlpurifier' => 'v4.14.0@12ab42bd6e742c70c0a52f7b82477fcd44e64b75',
  'firebase/php-jwt' => 'v6.2.0@d28e6df83830252650da4623c78aaaf98fb385f3',
  'fruitcake/laravel-cors' => 'v2.2.0@783a74f5e3431d7b9805be8afb60fd0a8f743534',
  'fruitcake/php-cors' => 'v1.2.0@58571acbaa5f9f462c9c77e911700ac66f446d4e',
  'giggsey/libphonenumber-for-php' => '8.12.50@526c4b7f6d5e173770d8645e76340d7eb25dc348',
  'giggsey/locale' => '2.2@9c1dca769253f6a3e81f9a5c167f53b6a54ab635',
  'graham-campbell/result-type' => 'v1.0.4@0690bde05318336c7221785f2a932467f98b64ca',
  'guzzlehttp/guzzle' => '7.4.4@e3ff079b22820c2029d4c2a87796b6a0b8716ad8',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '2.3.0@83260bb50b8fc753c72d14dc1621a2dac31877ee',
  'intervention/image' => '2.7.2@04be355f8d6734c826045d02a1079ad658322dad',
  'laminas/laminas-diactoros' => '2.11.0@d1bc565b23c2040fafde398a8a5db083c47928c0',
  'laravel/framework' => 'v9.17.0@091e287678ac723c591509ca6374e4ded4a99b1c',
  'laravel/helpers' => 'v1.5.0@c28b0ccd799d58564c41a62395ac9511a1e72931',
  'laravel/legacy-factories' => 'v1.3.0@5edc7e7eb76e7b4b29221f32139bcbf806c8870f',
  'laravel/sanctum' => 'v2.15.1@31fbe6f85aee080c4dc2f9b03dc6dd5d0ee72473',
  'laravel/serializable-closure' => 'v1.2.0@09f0e9fb61829f628205b7c94906c28740ff9540',
  'laravel/socialite' => 'v5.5.2@68afb03259b82d898c68196cbcacd48596a9dd72',
  'laravel/tinker' => 'v2.7.2@dff39b661e827dae6e092412f976658df82dbac5',
  'laravel/ui' => 'v3.4.6@65ec5c03f7fee2c8ecae785795b829a15be48c2c',
  'laravelcollective/html' => 'v6.3.0@78c3cb516ac9e6d3d76cad9191f81d217302dea6',
  'lcobucci/clock' => '2.2.0@fb533e093fd61321bfcbac08b131ce805fe183d3',
  'lcobucci/jwt' => '4.1.5@fe2d89f2eaa7087af4aa166c6f480ef04e000582',
  'league/commonmark' => '2.3.3@0da1dca5781dd3cfddbe328224d9a7a62571addc',
  'league/config' => 'v1.1.1@a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e',
  'league/csv' => '9.8.0@9d2e0265c5d90f5dd601bc65ff717e05cec19b47',
  'league/flysystem' => '3.0.21@8f1fcf9d2304ff77a006aa36dd2cb5f236999b12',
  'league/mime-type-detection' => '1.11.0@ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
  'league/oauth1-client' => 'v1.10.1@d6365b901b5c287dd41f143033315e2f777e1167',
  'maatwebsite/excel' => '3.1.40@8a54972e3d616c74687c3cbff15765555761885c',
  'madnest/madzipper' => 'v1.3.1@fd535f180cb12eda336fc3515a08b332286f0aaf',
  'maennchen/zipstream-php' => '2.2.1@211e9ba1530ea5260b45d90c9ea252f56ec52729',
  'markbaker/complex' => '3.0.1@ab8bc271e404909db09ff2d5ffa1e538085c0f22',
  'markbaker/matrix' => '3.0.0@c66aefcafb4f6c269510e9ac46b82619a904c576',
  'monolog/monolog' => '2.7.0@5579edf28aee1190a798bfa5be8bc16c563bd524',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'myclabs/php-enum' => '1.8.3@b942d263c641ddb5190929ff840c68f78713e937',
  'nesbot/carbon' => '2.58.0@97a34af22bde8d0ac20ab34b29d7bfe360902055',
  'nette/schema' => 'v1.2.2@9a39cef03a5b34c7de64f551538cbba05c2be5df',
  'nette/utils' => 'v3.2.7@0af4e3de4df9f1543534beab255ccf459e7a2c99',
  'nikic/php-parser' => 'v4.14.0@34bea19b6e03d8153165d8f30bba4c3be86184c1',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paragonie/sodium_compat' => 'v1.17.1@ac994053faac18d386328c91c7900f930acadf1e',
  'paynow/php-sdk' => '1.0.5@b72ac71c899154fce8bbbe011c3367d8bd2f740e',
  'paypal/paypal-checkout-sdk' => '1.0.1@ed6a55075448308b87a8b59dcb7fedf04a048cb1',
  'paypal/paypalhttp' => '1.0.0@1ad9b846a046f09d6135cbf2cbaa7701bbc630a3',
  'phpoffice/phpspreadsheet' => '1.23.0@21e4cf62699eebf007db28775f7d1554e612ed9e',
  'phpoption/phpoption' => '1.8.1@eab7a0df01fe2344d172bff4cd6dbd3f8b84ad15',
  'plivo/plivo-php' => 'v4.33.0@4a165b995dfc186b6f666947a540c28265573d00',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '2.0.0@8707bf3cea6f710bf6ef05491234e3ab06f6432a',
  'psy/psysh' => 'v0.11.5@c23686f9c48ca202710dbb967df8385a952a2daf',
  'pusher/pusher-php-server' => '7.0.2@af3eeaefc0c7959f5b3852f0a4dd5547245d33df',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.3.1@8505afd4fea63b81a85d3b7b53ac3cb8dc347c28',
  'rap2hpoutre/fast-excel' => 'v3.2.0@28183f3a90179386bfadcd0083129c247ce49fbe',
  'razorpay/razorpay' => 'v2.8.3@1ae60f9142f63cb01e6f9b843dd0a3573976fd40',
  'rmccue/requests' => 'v2.0.3@b290dd974051bf1ead51d1947a5a56357e5b80ff',
  'sendpulse/rest-api' => '1.0.26@e20b957c9b3e88563f449622c1f963f81e47c2d8',
  'spatie/laravel-package-tools' => '1.11.3@baeb3df0ebb3a541394fdaf8cbe6115bf4034a59',
  'spatie/laravel-translatable' => '6.0.0@c4c2bef702738f26562b6dc37b66bdac545610e1',
  'stella-maris/clock' => '0.1.4@8a0a967896df4c63417385dc69328a0aec84d9cf',
  'stripe/stripe-php' => 'v7.128.0@c704949c49b72985c76cc61063aa26fefbd2724e',
  'symfony/console' => 'v6.1.1@6187424023fbffcd757789aeb517c9161b1eabee',
  'symfony/css-selector' => 'v6.1.0@05c40f02f621609404b8820ff8bc39acb46e19cf',
  'symfony/deprecation-contracts' => 'v3.1.0@07f1b9cc2ffee6aaafcf4b710fbc38ff736bd918',
  'symfony/error-handler' => 'v6.1.0@d02c662651e5de760bb7d5e94437113309e8f8a0',
  'symfony/event-dispatcher' => 'v6.1.0@a0449a7ad7daa0f7c0acd508259f80544ab5a347',
  'symfony/event-dispatcher-contracts' => 'v3.1.0@02ff5eea2f453731cfbc6bc215e456b781480448',
  'symfony/finder' => 'v6.1.0@45b8beb69d6eb3b05a65689ebfd4222326773f8f',
  'symfony/http-foundation' => 'v6.1.1@a58dc88d56e04e57993d96c1407a17407610e1df',
  'symfony/http-kernel' => 'v6.1.1@86c4d6f6c5b6cd012df41e3b950c924b3ffdc019',
  'symfony/mailer' => 'v6.1.1@db6a19a5c896139901c2de59fc9849379e0ff3b6',
  'symfony/mime' => 'v6.1.1@56508865dd883dce3c863af11b3e8053adab30d7',
  'symfony/polyfill-ctype' => 'v1.26.0@6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
  'symfony/polyfill-intl-grapheme' => 'v1.26.0@433d05519ce6990bf3530fba6957499d327395c2',
  'symfony/polyfill-intl-idn' => 'v1.26.0@59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
  'symfony/polyfill-intl-normalizer' => 'v1.26.0@219aa369ceff116e673852dce47c3a41794c14bd',
  'symfony/polyfill-mbstring' => 'v1.26.0@9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
  'symfony/polyfill-php72' => 'v1.26.0@bf44a9fd41feaac72b074de600314a93e2ae78e2',
  'symfony/polyfill-php80' => 'v1.26.0@cfa0ae98841b9e461207c13ab093d76b0fa7bace',
  'symfony/polyfill-php81' => 'v1.26.0@13f6d1271c663dc5ae9fb843a8f16521db7687a1',
  'symfony/process' => 'v6.1.0@318718453c2be58266f1a9e74063d13cb8dd4165',
  'symfony/routing' => 'v6.1.1@8f068b792e515b25e26855ac8dc7fe800399f3e5',
  'symfony/service-contracts' => 'v2.5.1@24d9dc654b83e91aa59f9d167b131bc3b5bea24c',
  'symfony/string' => 'v6.1.0@d3edc75baf9f1d4f94879764dda2e1ac33499529',
  'symfony/translation' => 'v6.1.0@b254416631615bc6fe49b0a67f18658827288147',
  'symfony/translation-contracts' => 'v3.1.0@bfddd2a1faa271b782b791c361cc16e2dd49dfaa',
  'symfony/var-dumper' => 'v6.1.0@98587d939cb783aa04e828e8fa857edaca24c212',
  'symfony/yaml' => 'v6.1.0@84ce4f9d2d68f306f971a39d949d8f4b5550dba2',
  'tijsverkoyen/css-to-inline-styles' => '2.2.4@da444caae6aca7a19c0c140f68c6182e337d5b1c',
  'twilio/sdk' => '6.37.3@91f1d939596ba8976b4be09ea634a1bab3a4cb7f',
  'vlucas/phpdotenv' => 'v5.4.1@264dce589e7ce37a7ba99cb901eed8249fbec92f',
  'voku/portable-ascii' => '2.0.1@b56450eed252f6801410d810c8e1727224ae0743',
  'vonage/client' => '2.4.0@29f23e317d658ec1c3e55cf778992353492741d7',
  'vonage/client-core' => '2.10.1@0e5c6bf4af22cae60a3f1098b75c25d70bac242f',
  'vonage/nexmo-bridge' => '0.1.1@36490dcc5915f12abeaa233c6098e0dce14bbb0a',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'barryvdh/laravel-debugbar' => 'v3.6.7@b96f9820aaf1ff9afe945207883149e1c7afb298',
  'barryvdh/laravel-ide-helper' => 'v2.12.3@3ba1e2573b38f72107b8aacc4ee177fcab30a550',
  'barryvdh/reflection-docblock' => 'v2.0.6@6b69015d83d3daf9004a71a89f26e27d27ef6a16',
  'composer/pcre' => '3.0.0@e300eb6c535192decd27a85bc72a9290f0d6b3bd',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'fakerphp/faker' => 'v1.19.0@d7f08a622b3346766325488aa32ddc93ccdecc75',
  'filp/whoops' => '2.14.5@a63e5e8f26ebbebf8ed3c5c691637325512eb0dc',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'laravel/horizon' => 'v5.9.7@a98150769dc970972c30219662fe0e64259b733f',
  'laravel/sail' => 'v1.14.10@0ea5d683af4d189071efcdb9e83946c10dab82c3',
  'laravel/telescope' => 'v4.9.0@d0cf8d6a54a1831dbe189a1f194e8271a4a5435a',
  'maximebf/debugbar' => 'v1.18.0@0d44b75f3b5d6d41ae83b79c7a4bceae7fbc78b6',
  'mockery/mockery' => '1.5.0@c10a5f6e06fc2470ab1822fa13fa2a7380f8fbac',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'nunomaduro/collision' => 'v6.2.0@c379636dc50e829edb3a8bcb944a01aa1aed8f25',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.1@77a32518733312af16a44300404e945338981de3',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '9.2.15@2e9da11878c4202f97915c1cb4bb1ca318a63f5f',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.20@12bc8879fb65aef2138b26fc633cb1e3620cffba',
  'predis/predis' => 'v1.1.10@a2fb02d738bedadcffdbb07efa3a5e7bd57f8d6e',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.4@1b5dff7bb151a4db11d49d90e5408e4e938270f7',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.5@0ca8db5a5fc9c8646244e629625ac486fa286bf2',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.0.0@b233b84bc4465aff7b57cf1c4bc75c86d00d6dad',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'spatie/backtrace' => '1.2.1@4ee7d41aa5268107906ea8a4d9ceccde136dbd5b',
  'spatie/flare-client-php' => '1.2.0@86a380f5b1ce839af04a08f1c8f2697184cdf23f',
  'spatie/ignition' => '1.3.1@997363fbcce809b1e55f571997d49017f9c623d9',
  'spatie/laravel-ignition' => '1.3.1@fe37a0eafe6ea040804255c70e9808af13314f87',
  'symfony/debug' => 'v4.4.41@6637e62480b60817b9a6984154a533e8e64c6bd5',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'codeglen/ultimatesms' => 'dev-master@d982d611ef4b6d3ad1f2ab4a843ca96d6441d076',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
