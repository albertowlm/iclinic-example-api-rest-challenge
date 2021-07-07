<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;








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
    'dev' => true,
  ),
  'versions' => 
  array (
    'asm89/stack-cors' => 
    array (
      'pretty_version' => 'v2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9cb795bf30988e8c96dd3c40623c48a877bc6714',
      'dev-requirement' => false,
    ),
    'brick/math' => 
    array (
      'pretty_version' => '0.9.2',
      'version' => '0.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dff976c2f3487d42c1db75a3b180e2b9f0e72ce0',
      'dev-requirement' => false,
    ),
    'cordoval/hamcrest-php' => 
    array (
      'dev-requirement' => true,
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'darkaonline/l5-swagger' => 
    array (
      'pretty_version' => '8.0.6',
      'version' => '8.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '4d5c4f1230cd7d4a66236ddafb8651b4f9d97d9d',
      'dev-requirement' => false,
    ),
    'davedevelopment/hamcrest-php' => 
    array (
      'dev-requirement' => true,
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'defuse/php-encryption' => 
    array (
      'pretty_version' => 'v2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '77880488b9954b7884c25555c2a0ea9e7053f9d2',
      'dev-requirement' => false,
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => '1.13.1',
      'version' => '1.13.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
      'dev-requirement' => false,
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
      'dev-requirement' => false,
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd56bf6102915de5702778fe20f2de3b2fe570b5b',
      'dev-requirement' => true,
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042',
      'dev-requirement' => false,
    ),
    'dragonmantank/cron-expression' => 
    array (
      'pretty_version' => 'v3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a8c6e56ab3ffcc538d05e8155bb42269abf1a0c',
      'dev-requirement' => false,
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '2.1.25',
      'version' => '2.1.25.0',
      'aliases' => 
      array (
      ),
      'reference' => '0dbf5d78455d4d6a41d186da50adc1122ec066f4',
      'dev-requirement' => false,
    ),
    'facade/flare-client-php' => 
    array (
      'pretty_version' => '1.8.1',
      'version' => '1.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '47b639dc02bcfdfc4ebb83de703856fa01e35f5f',
      'dev-requirement' => true,
    ),
    'facade/ignition' => 
    array (
      'pretty_version' => '2.10.2',
      'version' => '2.10.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '43688227bbf27c43bc1ad83af224f135b6ef0ff4',
      'dev-requirement' => true,
    ),
    'facade/ignition-contracts' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
      'dev-requirement' => true,
    ),
    'fakerphp/faker' => 
    array (
      'pretty_version' => 'v1.15.0',
      'version' => '1.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '89c6201c74db25fa759ff16e78a4d8f32547770e',
      'dev-requirement' => true,
    ),
    'fideloper/proxy' => 
    array (
      'pretty_version' => '4.4.1',
      'version' => '4.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c073b2bd04d1c90e04dc1b787662b558dd65ade0',
      'dev-requirement' => false,
    ),
    'filp/whoops' => 
    array (
      'pretty_version' => '2.13.0',
      'version' => '2.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2edbc73a4687d9085c8f20f398eebade844e8424',
      'dev-requirement' => true,
    ),
    'firebase/php-jwt' => 
    array (
      'pretty_version' => 'v5.4.0',
      'version' => '5.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd2113d9b2e0e349796e72d2a63cf9319100382d2',
      'dev-requirement' => false,
    ),
    'fruitcake/laravel-cors' => 
    array (
      'pretty_version' => 'v2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a8ccedc7ca95189ead0e407c43b530dc17791d6a',
      'dev-requirement' => false,
    ),
    'graham-campbell/result-type' => 
    array (
      'pretty_version' => 'v1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e279d2cd5d7fbb156ce46daada972355cea27bb',
      'dev-requirement' => false,
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '7.3.0',
      'version' => '7.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7008573787b430c1c1f650e3722d9bba59967628',
      'dev-requirement' => false,
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e7d04f1f6450fef59366c399cfad4b9383aa30d',
      'dev-requirement' => false,
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1dc8d9cba3897165e16d12bb13d813afb1eb3fe7',
      'dev-requirement' => false,
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
      'dev-requirement' => true,
    ),
    'illuminate/auth' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/bus' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/cache' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/collections' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/config' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/console' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/container' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/database' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/events' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/http' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/log' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/macroable' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/mail' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/queue' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/redis' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/routing' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/session' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/support' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/testing' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/translation' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/validation' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'illuminate/view' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => 'v8.49.2',
      ),
    ),
    'kodova/hamcrest-php' => 
    array (
      'dev-requirement' => true,
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v8.49.2',
      'version' => '8.49.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd9b43ee080b4d51344b2e578aa667f85040471a2',
      'dev-requirement' => false,
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
      'dev-requirement' => false,
    ),
    'laravel/passport' => 
    array (
      'pretty_version' => 'v10.1.3',
      'version' => '10.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a5e4471dd99b7638ab5ca3ecab6cd87cf37eb410',
      'dev-requirement' => false,
    ),
    'laravel/sail' => 
    array (
      'pretty_version' => 'v1.8.4',
      'version' => '1.8.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '164ab771c8ccef341a07a21fae2ee3b770ec2e9a',
      'dev-requirement' => true,
    ),
    'laravel/tinker' => 
    array (
      'pretty_version' => 'v2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '04ad32c1a3328081097a181875733fa51f402083',
      'dev-requirement' => false,
    ),
    'lcobucci/clock' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '353d83fe2e6ae95745b16b3d911813df6a05bfb3',
      'dev-requirement' => false,
    ),
    'lcobucci/jwt' => 
    array (
      'pretty_version' => '4.1.4',
      'version' => '4.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '71cf170102c8371ccd933fa4df6252086d144de6',
      'dev-requirement' => false,
    ),
    'league/commonmark' => 
    array (
      'pretty_version' => '1.6.5',
      'version' => '1.6.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '44ffd8d3c4a9133e4bd0548622b09c55af39db5f',
      'dev-requirement' => false,
    ),
    'league/event' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd2cc124cf9a3fab2bb4ff963307f60361ce4d119',
      'dev-requirement' => false,
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f3ad69181b8afed2c9edf7be5a2918144ff4ea32',
      'dev-requirement' => false,
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
      'dev-requirement' => false,
    ),
    'league/oauth2-server' => 
    array (
      'pretty_version' => '8.2.4',
      'version' => '8.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '622eaa1f28eb4a2dea0cfc7e4f5280fac794e83c',
      'dev-requirement' => false,
    ),
    'league/oauth2server' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'lncd/oauth2' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd1339f64479af1bee0e82a0413813fe5345a54ea',
      'dev-requirement' => true,
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'df991fd88693ab703aa403413d83e15f688dae33',
      'dev-requirement' => false,
    ),
    'mtdowling/cron-expression' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => '^1.0',
      ),
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.10.2',
      'version' => '1.10.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '776f831124e9c62e1a2c601ecc52e776d8bb7220',
      'dev-requirement' => true,
      'replaced' => 
      array (
        0 => '1.10.2',
      ),
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.50.0',
      'version' => '2.50.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f47f17d17602b2243414a44ad53d9f8b9ada5fdb',
      'dev-requirement' => false,
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.11.0',
      'version' => '4.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fe14cf3672a149364fb66dfe11bf6549af899f94',
      'dev-requirement' => false,
    ),
    'nunomaduro/collision' => 
    array (
      'pretty_version' => 'v5.5.0',
      'version' => '5.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b5cb36122f1c142c3c3ee20a0ae778439ef0244b',
      'dev-requirement' => true,
    ),
    'nyholm/psr7' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2212385b47153ea71b1c1b1374f8cb5e4f7892ec',
      'dev-requirement' => false,
    ),
    'opis/closure' => 
    array (
      'pretty_version' => '3.6.2',
      'version' => '3.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '06e2ebd25f2869e54a306dda991f7db58066f7f6',
      'dev-requirement' => false,
    ),
    'paragonie/constant_time_encoding' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f34c2b11eb9d2c9318e13540a1dbc2a3afbd939c',
      'dev-requirement' => false,
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.100',
      'version' => '9.99.100.0',
      'aliases' => 
      array (
      ),
      'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a',
      'dev-requirement' => false,
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
      'dev-requirement' => true,
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bae7c545bef187884426f042434e561ab1ddb182',
      'dev-requirement' => true,
    ),
    'php-http/message-factory' => 
    array (
      'pretty_version' => 'v1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a478cb11f66a6ac48d8954216cfed9aa06a501a1',
      'dev-requirement' => false,
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
      'dev-requirement' => true,
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.2.2',
      'version' => '5.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '069a785b2141f5bcf49f3e353548dc1cce6df556',
      'dev-requirement' => true,
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
      'dev-requirement' => true,
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.7.5',
      'version' => '1.7.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '994ecccd8f3283ecf5ac33254543eb0ac946d525',
      'dev-requirement' => false,
    ),
    'phpseclib/phpseclib' => 
    array (
      'pretty_version' => '3.0.9',
      'version' => '3.0.9.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a127a5133804ff2f47ae629dd529b129da616ad7',
      'dev-requirement' => false,
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => '1.13.0',
      'version' => '1.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'be1996ed8adc35c3fd795488a653f4b518be70ea',
      'dev-requirement' => true,
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '9.2.6',
      'version' => '9.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6293e1b30a2354e8428e004689671b83871edde',
      'dev-requirement' => true,
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '3.0.5',
      'version' => '3.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aa4be8575f26070b100fccb67faabb28f21f66f8',
      'dev-requirement' => true,
    ),
    'phpunit/php-invoker' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
      'dev-requirement' => true,
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
      'dev-requirement' => true,
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '5.0.3',
      'version' => '5.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
      'dev-requirement' => true,
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '9.5.6',
      'version' => '9.5.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb9b8333f14e3dce976a60ef6a7e05c7c7ed8bfb',
      'dev-requirement' => true,
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
      'dev-requirement' => false,
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
      'dev-requirement' => false,
    ),
    'psr/container-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
      'dev-requirement' => false,
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'dev-requirement' => false,
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
      'dev-requirement' => false,
    ),
    'psr/http-client-implementation' => 
    array (
      'dev-requirement' => false,
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
      'dev-requirement' => false,
    ),
    'psr/http-factory-implementation' => 
    array (
      'dev-requirement' => false,
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
      'dev-requirement' => false,
    ),
    'psr/http-message-implementation' => 
    array (
      'dev-requirement' => false,
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
      'dev-requirement' => false,
    ),
    'psr/log-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '1.0.0',
        1 => '1.0',
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
      'dev-requirement' => false,
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.10.8',
      'version' => '0.10.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e4573f47750dd6c92dca5aee543fa77513cbd8d3',
      'dev-requirement' => false,
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
      'dev-requirement' => false,
    ),
    'ramsey/collection' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '28a5c4ab2f5111db6a60b2b4ec84057e0f43b9c1',
      'dev-requirement' => false,
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '4.1.1',
      'version' => '4.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd4032040a750077205918c86049aa0f43d22947',
      'dev-requirement' => false,
    ),
    'rhumsaa/uuid' => 
    array (
      'dev-requirement' => false,
      'replaced' => 
      array (
        0 => '4.1.1',
      ),
    ),
    'sebastian/cli-parser' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '442e7c7e687e42adc03470c7b668bc4b2402c0b2',
      'dev-requirement' => true,
    ),
    'sebastian/code-unit' => 
    array (
      'pretty_version' => '1.0.8',
      'version' => '1.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
      'dev-requirement' => true,
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
      'dev-requirement' => true,
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '4.0.6',
      'version' => '4.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '55f4261989e546dc112258c7a75935a81a7ce382',
      'dev-requirement' => true,
    ),
    'sebastian/complexity' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '739b35e53379900cc9ac327b2147867b8b6efd88',
      'dev-requirement' => true,
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '3461e3fccc7cfdfc2720be910d3bd73c69be590d',
      'dev-requirement' => true,
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '5.1.3',
      'version' => '5.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '388b6ced16caa751030f6a69e588299fa09200ac',
      'dev-requirement' => true,
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '4.0.3',
      'version' => '4.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd89cc98761b8cb5a1a235a6b703ae50d34080e65',
      'dev-requirement' => true,
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '5.0.3',
      'version' => '5.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '23bd5951f7ff26f12d4e3242864df3e08dec4e49',
      'dev-requirement' => true,
    ),
    'sebastian/lines-of-code' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1c2e997aa3146983ed888ad08b15470a2e22ecc',
      'dev-requirement' => true,
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
      'dev-requirement' => true,
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
      'dev-requirement' => true,
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd9d8cf3c5804de4341c283ed787f099f5506172',
      'dev-requirement' => true,
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
      'dev-requirement' => true,
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '2.3.4',
      'version' => '2.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b8cd8a1c753c90bc1a0f5372170e3e489136f914',
      'dev-requirement' => true,
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
      'dev-requirement' => true,
    ),
    'swagger-api/swagger-ui' => 
    array (
      'pretty_version' => 'v3.51.1',
      'version' => '3.51.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bb21c6df52eb12cd4bdbf8c29feb500795595fa8',
      'dev-requirement' => false,
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v6.2.7',
      'version' => '6.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '15f7faf8508e04471f666633addacf54c0ab5933',
      'dev-requirement' => false,
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v5.3.2',
      'version' => '5.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '649730483885ff2ca99ca0560ef0e5f6b03f2ac1',
      'dev-requirement' => false,
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fcd0b29a7a0b1bb5bfbedc6231583d77fea04814',
      'dev-requirement' => false,
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f38c8804a9e97d23e0c8d63341088cd8a22d627',
      'dev-requirement' => false,
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v5.3.3',
      'version' => '5.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '43323e79c80719e8a4674e33484bca98270d223f',
      'dev-requirement' => false,
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '67a5f354afa8e2f231081b3fa11a5912f933c3ce',
      'dev-requirement' => false,
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '69fee1ad2332a7cbab3aca13591953da9cdb7a11',
      'dev-requirement' => false,
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '2.0',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ae3f047bed4edff6fd35b26a9a6bfdc92c953c6',
      'dev-requirement' => false,
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
      'dev-requirement' => false,
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v5.3.3',
      'version' => '5.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0e45ab1574caa0460d9190871a8ce47539e40ccf',
      'dev-requirement' => false,
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v5.3.3',
      'version' => '5.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '90ad9f4b21ddcb8ebe9faadfcca54929ad23f9f8',
      'dev-requirement' => false,
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.3.2',
      'version' => '5.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '47dd7912152b82d0d4c8d9040dbc93d6232d472a',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '46cd95797e9df938fdd2b03693b5fca5e64b01ce',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '63b5bb7db83e5673936d6e3b8b3e022ff6474933',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '24b72c6baa32c746a4d0840147c9715e42bb68ab',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '65bd267525e82759e7d8c4e8ceea44f398838e65',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8590a5f561694770bdcd3f9b5c69dde6945028e8',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a142215a36a3888e30d0a9eeea9766764e96976',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fba8933c384d6476ab14fb7b8526e5287ca7e010',
      'dev-requirement' => false,
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eca0bf41ed421bed1b57c4958bab16aa86b757d0',
      'dev-requirement' => false,
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v5.3.2',
      'version' => '5.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '714b47f9196de61a196d86c4bad5f09201b307df',
      'dev-requirement' => false,
    ),
    'symfony/psr-http-message-bridge' => 
    array (
      'pretty_version' => 'v2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '81db2d4ae86e9f0049828d9343a72b9523884e5d',
      'dev-requirement' => false,
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '368e81376a8e049c37cb80ae87dbfbf411279199',
      'dev-requirement' => false,
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
      'dev-requirement' => false,
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v5.3.3',
      'version' => '5.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bd53358e3eccec6a670b5f33ab680d8dbe1d4ae1',
      'dev-requirement' => false,
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v5.3.3',
      'version' => '5.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '380b8c9e944d0e364b25f28e8e555241eb49c01c',
      'dev-requirement' => false,
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '95c812666f3e91db75385749fe219c5e494c7f95',
      'dev-requirement' => false,
    ),
    'symfony/translation-implementation' => 
    array (
      'dev-requirement' => false,
      'provided' => 
      array (
        0 => '2.3',
      ),
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.3.3',
      'version' => '5.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '46aa709affb9ad3355bd7a810f9662d71025c384',
      'dev-requirement' => false,
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v5.3.3',
      'version' => '5.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '485c83a2fb5893e2ff21bf4bfc7fdf48b4967229',
      'dev-requirement' => false,
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '75a63c33a8577608444246075ea0af0d052e452a',
      'dev-requirement' => true,
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.3',
      'version' => '2.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b43b05cf43c1b6d849478965062b6ef73e223bb5',
      'dev-requirement' => false,
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b3eac5c7ac896e52deab4a99068e3f4ab12d9e56',
      'dev-requirement' => false,
    ),
    'voku/portable-ascii' => 
    array (
      'pretty_version' => '1.5.6',
      'version' => '1.5.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '80953678b19901e5165c56752d087fc11526017c',
      'dev-requirement' => false,
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25',
      'dev-requirement' => false,
    ),
    'zircote/swagger-php' => 
    array (
      'pretty_version' => '3.2.3',
      'version' => '3.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '41ed0eb1dacebe2c365623b3f9ab13d1531a03da',
      'dev-requirement' => false,
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







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










public static function isInstalled($packageName, $includeDevRequirements = true)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return $includeDevRequirements || empty($installed['versions'][$packageName]['dev-requirement']);
}
}

return false;
}













public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










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





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}





private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
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
