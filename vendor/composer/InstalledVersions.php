<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'laravel/laravel',
  ),
  'versions' => 
  array (
    'cordoval/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'craftsys/msg91-laravel' => 
    array (
      'pretty_version' => 'v0.13.1',
      'version' => '0.13.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'df60d6783a59556079295ebb6dc7338a1539bf99',
    ),
    'craftsys/msg91-php' => 
    array (
      'pretty_version' => 'v0.15.2',
      'version' => '0.15.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '85e52b30078ef5eccffbe4c8577fc762e3b2878b',
    ),
    'davedevelopment/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd56bf6102915de5702778fe20f2de3b2fe570b5b',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042',
    ),
    'dragonmantank/cron-expression' => 
    array (
      'pretty_version' => 'v2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '65b2d8ee1f10915efb3b55597da3404f096acba2',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '2.1.25',
      'version' => '2.1.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '0dbf5d78455d4d6a41d186da50adc1122ec066f4',
    ),
    'facade/flare-client-php' => 
    array (
      'pretty_version' => '1.8.1',
      'version' => '1.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '47b639dc02bcfdfc4ebb83de703856fa01e35f5f',
    ),
    'facade/ignition' => 
    array (
      'pretty_version' => '1.18.0',
      'version' => '1.18.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fca0cbe5f900f94773d821b481c16d4ea3503491',
    ),
    'facade/ignition-contracts' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
    ),
    'fakerphp/faker' => 
    array (
      'pretty_version' => 'v1.15.0',
      'version' => '1.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '89c6201c74db25fa759ff16e78a4d8f32547770e',
    ),
    'fideloper/proxy' => 
    array (
      'pretty_version' => '4.4.1',
      'version' => '4.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c073b2bd04d1c90e04dc1b787662b558dd65ade0',
    ),
    'filp/whoops' => 
    array (
      'pretty_version' => '2.14.0',
      'version' => '2.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fdf92f03e150ed84d5967a833ae93abffac0315b',
    ),
    'firebase/php-jwt' => 
    array (
      'pretty_version' => 'v5.4.0',
      'version' => '5.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd2113d9b2e0e349796e72d2a63cf9319100382d2',
    ),
    'google/auth' => 
    array (
      'pretty_version' => 'v1.18.0',
      'version' => '1.18.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '21dd478e77b0634ed9e3a68613f74ed250ca9347',
    ),
    'google/cloud-core' => 
    array (
      'pretty_version' => 'v1.43.0',
      'version' => '1.43.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2cbd6d2d975611cd420df428344049fe3a20dbde',
    ),
    'google/cloud-translate' => 
    array (
      'pretty_version' => 'v1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a840c101c2469da1d07f1082bbc6805d3eba8a46',
    ),
    'google/common-protos' => 
    array (
      'pretty_version' => '1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c348d1545fbeac7df3c101fdc687aba35f49811f',
    ),
    'google/gax' => 
    array (
      'pretty_version' => 'v1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '30ca2be6125c8936e74ad17ec2b495bb26697a59',
    ),
    'google/grpc-gcp' => 
    array (
      'pretty_version' => '0.1.5',
      'version' => '0.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bb9bdbf62f6ae4e73d5209d85b1d0a0b9855ff36',
    ),
    'google/protobuf' => 
    array (
      'pretty_version' => 'v3.18.0',
      'version' => '3.18.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '24fed401306c943be38a1371ca2f3db2cd8137fb',
    ),
    'grpc/grpc' => 
    array (
      'pretty_version' => '1.39.0',
      'version' => '1.39.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '101485614283d1ecb6b2ad1d5b95dc82495931db',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '7.3.0',
      'version' => '7.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7008573787b430c1c1f650e3722d9bba59967628',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e7d04f1f6450fef59366c399cfad4b9383aa30d',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1dc8d9cba3897165e16d12bb13d813afb1eb3fe7',
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
    ),
    'illuminate/auth' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/bus' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/container' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/database' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/events' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/mail' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/queue' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/redis' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/session' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/support' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/validation' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'illuminate/view' => 
    array (
      'replaced' => 
      array (
        0 => 'v6.20.32',
      ),
    ),
    'jakub-onderka/php-console-color' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'jakub-onderka/php-console-highlighter' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'joggapp/laravel-google-translate' => 
    array (
      'pretty_version' => 'v5.0.2',
      'version' => '5.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '58f1bc7ddb88d6d771a3e037730f6a9eada987c4',
    ),
    'kodova/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v6.20.32',
      'version' => '6.20.32.0',
      'aliases' => 
      array (
      ),
      'reference' => '04d4fa31d10ed344c9d1cf30a761b0c4e468aaf2',
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'laravel/socialite' => 
    array (
      'pretty_version' => 'v5.2.4',
      'version' => '5.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '59e2f8d9d9663029c7746a92d60bbb7697953bb9',
    ),
    'laravel/tinker' => 
    array (
      'pretty_version' => 'v2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '04ad32c1a3328081097a181875733fa51f402083',
    ),
    'lcobucci/jwt' => 
    array (
      'pretty_version' => '3.3.3',
      'version' => '3.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1123697f6a2ec29162b82f170dd4a491f524773',
    ),
    'league/commonmark' => 
    array (
      'pretty_version' => '1.6.6',
      'version' => '1.6.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c4228d11e30d7493c6836d20872f9582d8ba6dcf',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.1.5',
      'version' => '1.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '18634df356bfd4119fe3d6156bdb990c414c14ea',
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
    ),
    'league/oauth1-client' => 
    array (
      'pretty_version' => 'v1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '88dd16b0cff68eb9167bfc849707d2c40ad91ddc',
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd1339f64479af1bee0e82a0413813fe5345a54ea',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.3.2',
      'version' => '2.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '71312564759a7db5b789296369c1a264efc43aad',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.10.2',
      'version' => '1.10.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '776f831124e9c62e1a2c601ecc52e776d8bb7220',
      'replaced' => 
      array (
        0 => '1.10.2',
      ),
    ),
    'namshi/jose' => 
    array (
      'pretty_version' => '7.2.3',
      'version' => '7.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '89a24d7eb3040e285dd5925fcad992378b82bcff',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.52.0',
      'version' => '2.52.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '369c0e2737c56a0f39c946dd261855255a6fccbe',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.12.0',
      'version' => '4.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6608f01670c3cc5079e18c1dab1104e002579143',
    ),
    'nunomaduro/collision' => 
    array (
      'pretty_version' => 'v3.2.0',
      'version' => '3.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f7c45764dfe4ba5f2618d265a6f1f9c72732e01d',
    ),
    'opis/closure' => 
    array (
      'pretty_version' => '3.6.2',
      'version' => '3.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '06e2ebd25f2869e54a306dda991f7db58066f7f6',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v2.0.20',
      'version' => '2.0.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f1f60250fccffeaf5dda91eea1c018aed1adc2a',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bae7c545bef187884426f042434e561ab1ddb182',
    ),
    'php-parallel-lint/php-console-color' => 
    array (
      'pretty_version' => 'v0.3',
      'version' => '0.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b6af326b2088f1ad3b264696c9fd590ec395b49e',
    ),
    'php-parallel-lint/php-console-highlighter' => 
    array (
      'pretty_version' => 'v0.5',
      'version' => '0.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '21bf002f077b177f056d8cb455c5ed573adfdbb8',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.2.2',
      'version' => '5.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '069a785b2141f5bcf49f3e353548dc1cce6df556',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.7.5',
      'version' => '1.7.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '994ecccd8f3283ecf5ac33254543eb0ac946d525',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => '1.13.0',
      'version' => '1.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'be1996ed8adc35c3fd795488a653f4b518be70ea',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '9.2.6',
      'version' => '9.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6293e1b30a2354e8428e004689671b83871edde',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '3.0.5',
      'version' => '3.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aa4be8575f26070b100fccb67faabb28f21f66f8',
    ),
    'phpunit/php-invoker' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '5.0.3',
      'version' => '5.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '9.5.8',
      'version' => '9.5.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '191768ccd5c85513b4068bdbe99bb6390c7d54fb',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
    ),
    'psr/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
        1 => '1.0.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.10.8',
      'version' => '0.10.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e4573f47750dd6c92dca5aee543fa77513cbd8d3',
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '3.9.4',
      'version' => '3.9.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'be2451bef8147b7352a28fb4cddb08adc497ada3',
    ),
    'razorpay/razorpay' => 
    array (
      'pretty_version' => '2.7.0',
      'version' => '2.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e28454acdc110b544fc80bec9518b9b86b275a2c',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '3.9.4',
      ),
    ),
    'rize/uri-template' => 
    array (
      'pretty_version' => '0.3.3',
      'version' => '0.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '6e0b97e00e0f36c652dd3c37b194ef07de669b82',
    ),
    'rmccue/requests' => 
    array (
      'pretty_version' => 'v1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'afbe4790e4def03581c4a0963a1e8aa01f6030f1',
    ),
    'scrivo/highlight.php' => 
    array (
      'pretty_version' => 'v9.18.1.7',
      'version' => '9.18.1.7',
      'aliases' => 
      array (
      ),
      'reference' => '05996fcc61e97978d76ca7d1ac14b65e7cd26f91',
    ),
    'sebastian/cli-parser' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '442e7c7e687e42adc03470c7b668bc4b2402c0b2',
    ),
    'sebastian/code-unit' => 
    array (
      'pretty_version' => '1.0.8',
      'version' => '1.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '4.0.6',
      'version' => '4.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '55f4261989e546dc112258c7a75935a81a7ce382',
    ),
    'sebastian/complexity' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '739b35e53379900cc9ac327b2147867b8b6efd88',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '3461e3fccc7cfdfc2720be910d3bd73c69be590d',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '5.1.3',
      'version' => '5.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '388b6ced16caa751030f6a69e588299fa09200ac',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '4.0.3',
      'version' => '4.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd89cc98761b8cb5a1a235a6b703ae50d34080e65',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '5.0.3',
      'version' => '5.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '23bd5951f7ff26f12d4e3242864df3e08dec4e49',
    ),
    'sebastian/lines-of-code' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1c2e997aa3146983ed888ad08b15470a2e22ecc',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd9d8cf3c5804de4341c283ed787f099f5506172',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '2.3.4',
      'version' => '2.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b8cd8a1c753c90bc1a0f5372170e3e489136f914',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
    ),
    'stripe/stripe-php' => 
    array (
      'pretty_version' => 'v7.94.0',
      'version' => '7.94.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '03cd6b5c1c4fc9087ddd1dd046457bff274294d6',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '15f7faf8508e04471f666633addacf54c0ab5933',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v4.4.29',
      'version' => '4.4.29.0',
      'aliases' => 
      array (
      ),
      'reference' => '8baf0bbcfddfde7d7225ae8e04705cfd1081cd7b',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '7fb120adc7f600a59027775b224c13a33530dd90',
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v4.4.27',
      'version' => '4.4.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '2f9160e92eb64c95da7368c867b663a8e34e980c',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f38c8804a9e97d23e0c8d63341088cd8a22d627',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v4.4.27',
      'version' => '4.4.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '16ac2be1c0f49d6d9eb9d3ce9324bde268717905',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v4.4.27',
      'version' => '4.4.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '958a128b184fcf0ba45ec90c0e88554c9327c2e9',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v1.1.9',
      'version' => '1.1.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '84e23fdcd2517bf37aecbd16967e83f0caee25a7',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v4.4.27',
      'version' => '4.4.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '42414d7ac96fc2880a783b872185789dea0d4262',
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v4.4.29',
      'version' => '4.4.29.0',
      'aliases' => 
      array (
      ),
      'reference' => '7016057b01f0ed3ec3ba1f31a580b6661667c2e1',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v4.4.29',
      'version' => '4.4.29.0',
      'aliases' => 
      array (
      ),
      'reference' => '752b170e1ba0dd4104e7fa17c1cef1ec8a7fc506',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '633e4e8afe9e529e5599d71238849a4218dd497b',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '46cd95797e9df938fdd2b03693b5fca5e64b01ce',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '63b5bb7db83e5673936d6e3b8b3e022ff6474933',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '65bd267525e82759e7d8c4e8ceea44f398838e65',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8590a5f561694770bdcd3f9b5c69dde6945028e8',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.23.1',
      'version' => '1.23.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9174a3d80210dca8daa7f31fec659150bbeabfc6',
    ),
    'symfony/polyfill-php56' => 
    array (
      'pretty_version' => 'v1.20.0',
      'version' => '1.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a142215a36a3888e30d0a9eeea9766764e96976',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fba8933c384d6476ab14fb7b8526e5287ca7e010',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.23.1',
      'version' => '1.23.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1100343ed1a92e3a38f9ae122fc0eb21602547be',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v4.4.27',
      'version' => '4.4.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '0b7dc5599ac4aa6d7b936c8f7d10abae64f6cf7f',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v4.4.27',
      'version' => '4.4.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '244609821beece97167fa7ba4eef49d2a31862db',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v4.4.27',
      'version' => '4.4.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '2e3c0f2bf704d635ba862e7198d72331a62d82ba',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '95c812666f3e91db75385749fe219c5e494c7f95',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v4.4.27',
      'version' => '4.4.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '391d6d0e7a06ab54eb7c38fab29b8d174471b3ba',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.3',
      'version' => '2.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b43b05cf43c1b6d849478965062b6ef73e223bb5',
    ),
    'twilio/sdk' => 
    array (
      'pretty_version' => '6.28.2',
      'version' => '6.28.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '530be7f621fc8fb1d2af5ba5a70e278f262e048f',
    ),
    'tymon/jwt-auth' => 
    array (
      'pretty_version' => 'dev-develop',
      'version' => 'dev-develop',
      'aliases' => 
      array (
        0 => '1.0.x-dev',
      ),
      'reference' => 'ab00f2d7cce5f043067aef7849cdc792de2df635',
    ),
    'unicodeveloper/laravel-paystack' => 
    array (
      'pretty_version' => '1.0.7',
      'version' => '1.0.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bfcb92255c29d92b0c4e80355a65de14e2e156f3',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v3.6.8',
      'version' => '3.6.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e679f7616db829358341e2d5cccbd18773bdab8',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25',
    ),
  ),
);
    private static $canGetVendors;
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }


        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>}
     */
    public static function getRawData()
    {
        return self::$installed;
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            // @phpstan-ignore-next-line
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                }
            }
        }

        $installed[] = self::$installed;

        return $installed;
    }
}
