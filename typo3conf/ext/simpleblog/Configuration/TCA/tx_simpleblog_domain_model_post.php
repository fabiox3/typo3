<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:simpleblog/Resources/Private/Language/locallang_db.xlf:tx_simpleblog_domain_model_post',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,content,postdate,comments,author,tags',
        'iconfile' => 'EXT:simpleblog/Resources/Public/Icons/tx_simpleblog_domain_model_post.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, content, postdate, comments, author, tags',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, content, postdate, comments, author, tags, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_simpleblog_domain_model_post',
                'foreign_table_where' => 'AND tx_simpleblog_domain_model_post.pid=###CURRENT_PID### AND tx_simpleblog_domain_model_post.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'title' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:simpleblog/Resources/Private/Language/locallang_db.xlf:tx_simpleblog_domain_model_post.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'content' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:simpleblog/Resources/Private/Language/locallang_db.xlf:tx_simpleblog_domain_model_post.content',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	    ],
	    'postdate' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:simpleblog/Resources/Private/Language/locallang_db.xlf:tx_simpleblog_domain_model_post.postdate',
	        'config' => [
			    'dbType' => 'datetime',
			    'type' => 'input',
			    'size' => 12,
			    'eval' => 'datetime',
			    'default' => '0000-00-00 00:00:00'
			],
	    ],
	    'comments' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:simpleblog/Resources/Private/Language/locallang_db.xlf:tx_simpleblog_domain_model_post.comments',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_simpleblog_domain_model_comment',
			    'foreign_field' => 'post',
			    'maxitems' => 9999,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
	    'author' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:simpleblog/Resources/Private/Language/locallang_db.xlf:tx_simpleblog_domain_model_post.author',
	        'config' => [
			    'type' => 'select',
			    'foreign_table' => 'fe_users',
			    'minitems' => 0,
			    'maxitems' => 1,
			],
	    ],
	    'tags' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:simpleblog/Resources/Private/Language/locallang_db.xlf:tx_simpleblog_domain_model_post.tags',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingleBox',
			    'foreign_table' => 'tx_simpleblog_domain_model_tags',
			    'MM' => 'tx_simpleblog_post_tags_mm',
			    'size' => 10,
			    'autoSizeMax' => 30,
			    'maxitems' => 9999,
			    'multiple' => 0,
			    'wizards' => [
			        '_PADDING' => 1,
			        '_VERTICAL' => 1,
			        'edit' => [
			            'module' => [
			                'name' => 'wizard_edit',
			            ],
			            'type' => 'popup',
			            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
			            'popup_onlyOpenIfSelected' => 1,
			            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
			        ],
			        'add' => [
			            'module' => [
			                'name' => 'wizard_add',
			            ],
			            'type' => 'script',
			            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
			            'params' => [
			                'table' => 'tx_simpleblog_domain_model_tags',
			                'pid' => '###CURRENT_PID###',
			                'setValue' => 'prepend'
			            ],
			        ],
			    ],
			],
	    ],
        'blog' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
