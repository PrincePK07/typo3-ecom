<?php
defined('TYPO3_MODE') || die(); 
    $contentElementLanguageFilePrefix = 'LLL:EXT:vindonissa_theme/Resources/Private/Language/ContentElements.xlf:';
    $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';
    $frontendLanguageDatabaseFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:';
    $coreLanguageFilePrefix = 'LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:';

    //  banner
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'LLL:EXT:vindonissa_theme/Resources/Private/Language/ContentElements.xlf:banner.title',
            'Banner',
            'install-test-image'
        ],
        'image',
        'after'
    );
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['Banner'] = 'install-test-image';
    // product backend fields
    $GLOBALS['TCA']['tt_content']['types']['Banner'] = [
        'showitem' => '
            --div--;' .  $coreLanguageFilePrefix .'general,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,header;' . $frontendLanguageFilePrefix . 'header_formlabel,
                --linebreak--,bannerimage;' . $contentElementLanguageFilePrefix . 'bannerimage,
                --linebreak--,tx_vindonissa_theme_bannerlinks;' . $contentElementLanguageFilePrefix . 'tx_vindonissa_theme_bannerlinks,
            --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.appearanceLinks;appearanceLinks,
            --div--;' .  $coreLanguageFilePrefix .'language,
                --palette--;;language,
            --div--;' .  $coreLanguageFilePrefix .'access,
                --palette--;;hidden,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
            --div--;' .  $coreLanguageFilePrefix .'categories,categories,
            --div--;' .  $coreLanguageFilePrefix .'notes,rowDescription,
            --div--;' .  $coreLanguageFilePrefix .'extended,
        '
    ];
    $temporaryDataColumnReferences = [
        'bannerimage' => [
            'exclude' => true,
            'label' => $contentElementLanguageFilePrefix.'bannerimage',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'bannerimage',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'maxitems' => 1
                ],
                'jpg,jpeg,png,svg'
            ),
        ],
        'tx_vindonissa_theme_bannerlinks' => [
            'exclude' => true,
            'label' => $contentElementLanguageFilePrefix.'bannerimage',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_vindonissa_theme_bannerlinks',
                'foreign_field' => 'bannervalues',
                'maxitems' => 9999,
                'appearance' => [
                    'useSortable' => true,
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'useSortable' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
    ];
    $GLOBALS['TCA']['tt_content']['columns'] = array_merge($GLOBALS['TCA']['tt_content']['columns'],$temporaryDataColumnReferences);

  