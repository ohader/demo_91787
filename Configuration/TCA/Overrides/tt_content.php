<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die();

call_user_func(function () {
    ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'Forge #91787 Demo',
            'demo-91787',
            'content-text',
        ]
    );
    $GLOBALS['TCA']['tt_content']['types']['demo-91787'] = [
        'showitem' => 'header, subheader',
        'columnsOverrides' => [
            'header' => [
                'config' => [
                    'renderType' => 'demoInputBehavior',
                    'placeholder' =>  'behavior (new)',
                    'valuePicker' => [
                        'items' => [
                            ['aaa', 'Item #A'],
                            ['bbb', 'Item #B'],
                        ],
                    ],
                ],
            ],
            'subheader' => [
                'config' => [
                    'renderType' => 'demoInputLegacy',
                    'placeholder' =>  'legacy (old)',
                    'valuePicker' => [
                        'items' => [
                            ['aaa', 'Item #A'],
                            ['bbb', 'Item #B'],
                        ],
                    ],
                ],
            ],
        ],
    ];
});
