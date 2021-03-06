<?php

/*
 * ----------------------------
 * 修改此配置会影响网站 国家所属仓库,对应关系
 * ----------------------------
 */
return [
    'related' => [
        //美国仓
        'US' => [
            'code' => ["US", "MX", "CA", "PR"],
            'id' => [38, 223, 138, 172]
        ],
        //澳洲仓
        'AU' => [
            'code' => ["AU", "NZ"],
            'id' => [13, 153]
        ],
        //德国仓
        'DE' => [
            'code' => ["BE", "GB", "FR", "DE", "IT", "NL", "LU", "DK", "IE", "ES", "GR", "PT", "AT", "SE", "FI", "MT",
                "CY", "PL", "HU", "CZ", "SK", "SI", "EE", "LV", "LT", "RO", "BG", "HR", "MC",
                'IM', "IS", "BA", "RS", "ME", "MK", "AL", "MD", "NO", "CH", "AD", "LI", "SM", "JE", "FO", "GL",
                "GP", "GF", "MQ", "YT", "AW", "IC", 'GG', "VA", 'BL', "MF"],
            'id' => [21, 222, 73, 81, 105, 150, 124, 57, 103, 195, 84, 171, 14, 203, 72, 132, 55,
                170, 97, 56, 189, 190, 67, 117, 123, 175, 33, 53, 141, 244,
                98, 27, 236, 242, 126, 2, 140, 160, 204, 5, 122, 182, 245, 70, 85, 87, 75, 134, 137, 12, 250, 243, 228, 253, 254]
        ],
        //新加坡仓
        'SG' => [
            'code' => ["SG", "KH", "LA", "MY", "TL", "ID", "BN", "MM", "PH", "TH", "VN"],
            'id' => [32, 100, 36, 116, 146, 129, 168, 188, 209, 61, 230]
        ],
        'RU' => [
            'code' => ['RU'],
            'id' => [176]
        ],
        //国内仓
        'CN' => [
            'code' => [],
            'id' => []
        ],
    ],
    //当其国家匹配不到仓库时,默认匹配到国内仓
    'defaultWarehouse' => 'CN',

    //仓库切换开关
    'usWarehouseUp' => true,
    //欧盟
    'EuUnion' => [
        'code' => ["BE", "FR", "DE", "IT", "NL", "LU", "DK", "IE", "ES", "GR", "PT", "AT", "SE", "FI", "MT", "CY", "PL", "HU", "CZ", "SK", "SI", "EE", "LV", "LT", "RO", "BG", "HR", "MC"],
        'id' => [21, 73, 81, 105, 150, 124, 57, 103, 195, 84, 171, 14, 203, 72, 132, 55, 170, 97, 56, 189, 190, 67, 117, 123, 175, 33, 53, 141]
    ],
    //北爱尔兰邮编
    'northernIrelandRelatedPost' => [
        'BT11', 'BT12', 'BT13', 'BT14', 'BT15', 'BT16', 'BT19', 'BT100', 'BT109', 'BT118', 'BT119', 'BT124',
        'BT125', 'BT126', 'BT127', 'BT131', 'BT132', 'BT133', 'BT139', 'BT146', 'BT147', 'BT148', 'BT151',
        'BT152', 'BT153', 'BT154', 'BT155', 'BT161', 'BT162', 'BT170', 'BT179', 'BT180', 'BT188', 'BT189',
        'BT191', 'BT196', 'BT197', 'BT27', 'BT28', 'BT203', 'BT204', 'BT205', 'BT209', 'BT210',
        'BT221', 'BT222', 'BT234', 'BT235', 'BT236', 'BT237', 'BT238', 'BT239', 'BT247', 'BT248',
        'BT251', 'BT252', 'BT266', 'BT274', 'BT275', 'BT276', 'BT281', 'BT282', 'BT283', 'BT289', 'BT294',
        'BT39', 'BT300', 'BT306', 'BT307', 'BT308', 'BT309', 'BT319', 'BT323', 'BT324', 'BT325', 'BT329',
        'BT330', 'BT341', 'BT342', 'BT343', 'BT344', 'BT345', 'BT350', 'BT355', 'BT356', 'BT357', 'BT358', '
        BT359', 'BT364', 'BT365', 'BT366', 'BT367', 'BT369', 'BT370', 'BT379', 'BT380', 'BT387', 'BT388',
        'BT389', 'BT390', 'BT391', 'BT399', 'BT41', 'BT42', 'BT43', 'BT49', 'BT401', 'BT402', 'BT403',
        'BT409', 'BT411', 'BT412', 'BT413', 'BT414', 'BT419', 'BT421', 'BT422', 'BT423', 'BT424', 'BT429',
        'BT435', 'BT436', 'BT437', 'BT440', 'BT448', 'BT449', 'BT54', 'BT55', 'BT56', 'BT57', 'BT59',
        'BT513', 'BT514', 'BT515', 'BT521', 'BT522', 'BT529', 'BT536', 'BT537', 'BT538',
        'BT539', 'BT546', 'BT557', 'BT568', 'BT578', 'BT60', 'BT68', 'BT69', 'BT621', 'BT622', 'BT623',
        'BT624', 'BT635', 'BT636', 'BT641', 'BT642', 'BT643', 'BT649', 'BT654', 'BT655', 'BT659', 'BT666',
        'BT667', 'BT668', 'BT670', 'BT679', 'BT71', 'BT72', 'BT73', 'BT86', 'BT87', 'BT88', 'BT95', 'BT96',
        'BT97', 'BT455', 'BT456', 'BT457', 'BT458', 'BT459', 'BT465', 'BT472', 'BT473', 'BT474', 'BT475',
        'BT476', 'BT480', 'BT484', 'BT486', 'BT487', 'BT488', 'BT489', 'BT490', 'BT494', 'BT499', 'BT601',
        'BT602', 'BT603', 'BT604', 'BT610', 'BT617', 'BT618', 'BT619', 'BT684', 'BT696', 'BT701', 'BT702',
        'BT703', 'BT709', 'BT714', 'BT715', 'BT716', 'BT717', 'BT740', 'BT744', 'BT745', 'BT746', 'BT747',
        'BT748', 'BT749', 'BT750', 'BT760', 'BT770', 'BT781', 'BT782', 'BT783', 'BT784', 'BT785', 'BT789',
        'BT790', 'BT797', 'BT798', 'BT799', 'BT800', 'BT801', 'BT808', 'BT809', 'BT817', 'BT820', 'BT821',
        'BT828', 'BT829', 'BT920', 'BT921', 'BT922', 'BT923', 'BT924', 'BT925', 'BT926', 'BT927', 'BT928',
        'BT929', 'BT930', 'BT931', 'BT932', 'BT933', 'BT934', 'BT935', 'BT936', 'BT937', 'BT938', 'BT941',
        'BT942', 'BT943', 'BT944', 'BT945'
    ],
    'warehouse' => [
        '2' => 'US',
        '20' => 'DE',
        '40' => 'US',
        '37' => 'AU',
        '71' => 'SG',
        '67' => 'RU'
    ],
];
