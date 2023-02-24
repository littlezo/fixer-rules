<?php

declare(strict_types=1);

/**
 * #logic 做事不讲究逻辑，再努力也只是重复犯错
 * ## 何为相思：不删不聊不打扰，可否具体点：曾爱过。何为遗憾：你来我往皆过客，可否具体点：再无你。
 * ## 摔倒一次可以怪路不平鞋不正，在同一个地方摔倒两次，只能怪自己和自己和解，无不是一个不错的选择。
 * @version 1.0.0
 * @author @小小只^v^ <littlezov@qq.com>  littlezov@qq.com
 * @link     https://github.com/littlezo
 * @document https://github.com/littlezo/wiki
 * @license  https://github.com/littlezo/MozillaPublicLicense/blob/main/LICENSE
 *
 */

use Rector\Config\RectorConfig;
use Rector\Php56\Rector\FuncCall\PowToExpRector;
use Rector\Php56\Rector\FunctionLike\AddDefaultValueForUndefinedVariableRector;
use Rector\Renaming\Rector\FuncCall\RenameFunctionRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(PowToExpRector::class);
    $rectorConfig->ruleWithConfiguration(RenameFunctionRector::class, [
        'mcrypt_generic_end' => 'mcrypt_generic_deinit',
        'set_socket_blocking' => 'stream_set_blocking',
        'ocibindbyname' => 'oci_bind_by_name',
        'ocicancel' => 'oci_cancel',
        'ocicolumnisnull' => 'oci_field_is_null',
        'ocicolumnname' => 'oci_field_name',
        'ocicolumnprecision' => 'oci_field_precision',
        'ocicolumnscale' => 'oci_field_scale',
        'ocicolumnsize' => 'oci_field_size',
        'ocicolumntype' => 'oci_field_type',
        'ocicolumntyperaw' => 'oci_field_type_raw',
        'ocicommit' => 'oci_commit',
        'ocidefinebyname' => 'oci_define_by_name',
        'ocierror' => 'oci_error',
        'ociexecute' => 'oci_execute',
        'ocifetch' => 'oci_fetch',
        'ocifetchstatement' => 'oci_fetch_all',
        'ocifreecursor' => 'oci_free_statement',
        'ocifreestatement' => 'oci_free_statement',
        'ociinternaldebug' => 'oci_internal_debug',
        'ocilogoff' => 'oci_close',
        'ocilogon' => 'oci_connect',
        'ocinewcollection' => 'oci_new_collection',
        'ocinewcursor' => 'oci_new_cursor',
        'ocinewdescriptor' => 'oci_new_descriptor',
        'ocinlogon' => 'oci_new_connect',
        'ocinumcols' => 'oci_num_fields',
        'ociparse' => 'oci_parse',
        'ociplogon' => 'oci_pconnect',
        'ociresult' => 'oci_result',
        'ocirollback' => 'oci_rollback',
        'ocirowcount' => 'oci_num_rows',
        'ociserverversion' => 'oci_server_version',
        'ocisetprefetch' => 'oci_set_prefetch',
        'ocistatementtype' => 'oci_statement_type',
    ]);
    // inspired by level in psalm - https://github.com/vimeo/psalm/blob/82e0bcafac723fdf5007a31a7ae74af1736c9f6f/tests/FileManipulationTest.php#L1063
    $rectorConfig->rule(AddDefaultValueForUndefinedVariableRector::class);
};
