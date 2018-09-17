<?php

return [
    'alipay' => [
        'app_id'         => '2016091600527448',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAn2uKtgO4q7lcAlQThVMZchcbPmubxEqT7aIjWPnuMAG6nXagkDmDp7lLiS/h6SinEnR3gLhVhNXnXpyeVuXNwUTeyH8w3dFUCzvxiE/HYQwvwuhHj9mNly5vqFvnvQ/XFYKUefiSbM0gcqRxXqOZB5vuch4xsjmceoHYSZU7/kUhHr6R+AUpuCR9LYxY1/j0YMH9c/xAouxP2zNe/i3+pamUtIZvCRPIzT+XZmKp6L7EavpQg3+tnAQXqF4os5gxlahRSyawEJYTEzCOXizvWEF9rL/7E4dJaZiqBjEAzoG7VapSBmmWtlXMy4lCe042NXiUHe47wcFWTVzRr3hpTQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA2lTQTmJa+AfNT9yPi5i8I7XtMKvaiuDwrdGABrqGcgUwfvQ9P10z7n6cEnJAMJGrlmHvOdDKHoeMb1x/vXThXOhDGxaYQxY4Pzra3wnJX9N2wkM0ffXPKtIieNZgLsLtYQCoHVyd46r4FUpg5HdRldhW/cdR7zu1vlvxyKGloQzfN0DiPyOzeBB8LdVxlsd1K94TONkpNswfUd+a6SQ8ooxtEV0jXe0wA1It/W4HcE5RSMKzkEtX+0a9b7zUVQoeoCf1w2WmhVaY32PO9mpVY21k+TxN2mmnzLsv1Cv03fOAc+mbee6RUbyAKSE/Lmy4V/HD7x7/h/VKo/F/Qn6i2wIDAQABAoIBACybk4vQUKHIhkxA1htBc38gVnvRQO+LEeGRokS9q2Z0ZPorULA3jLq3p4+lRDQoLxSkocoAPKuMKkc+cOL2lGz1D3DjZuyeB5PzpHBZgYlQnT0Hmhv6Mv+eu2hQ9InZTcK57Z9CIwg3EETZU36aWlLxRqTHKphkbLed9YJ2dG6438nYGQFtLrYRLMA6IiROU/Ji2XsyiEIr9CuIlwKDaXolX0BgS25elLA9muOVtQqT3TXmcMakbvSF1vtAKtH7lKsZRRvfK4FtELz+o9E9nxkEQOIZjkqTzFaqqRbIZqioYi0yziUTIF0/8JMLekww4YHivJbsxy7Uu3yWtlPoenECgYEA+brUM7po+nDvnxx60EQ7ENt9dRmFYrWI5HImqaZutiVCpHC7Ie+Y5mtdxvxXtu1v1QNCP4pEe+aVBZywLnQViYkNitP+XgFAo9LyKU/VYPDNkak5c3IuR57tutH9eHAeilmmwz+TdTEsdvTm39PpSQC/q/YDPEWWCoLUQ84uk+cCgYEA39AqtK8OAFrorVISvJPPkf5+53/M2IBXQof9uKXjmgmG790r5MdE+OWSOaG/7I2O6tIRx+8jPVa3FK6zqv/ri79Po+zppZMaKQMgOVOApPCXTOaokSQ+dJa+0RhUsiuzB1sODRzZuZT9b9CKuNXr58/x7AtvsSRlP2pzLC+L2u0CgYBR7RTIk5L09i/mRvWTdY7bDOavj9vOcjeimkBMz6jqYHboc4MwsuW6UebF7OrpvCNAAn2tUrL84rxoxuqVkseuAyRKMxnzxP1rwTxoiSQ7VURbUOTkFsVQAbeD3ngFFuMuCBNJYoYBoEwyCk3jiCW0KWa4B1EwaLO8Zwcz52QoaQKBgQC12+wXjPaPi07tJndbC6/qLSTo7ouAkChXQzECzKi4DW27kbeM2e5NYB0E/0135T5vx+nyz3mO6dsxzxLmq7S1hOothOAFThY/pO6WJiet3mDSd8oYxZ6KFcNPG7oWXDPIklBEj2DKzylvpcBSmGBrqCgnaNOE2NH8SX70NF4rsQKBgFsLcuj4ZMCgBQu/G67kAzr7ZzUMwNXYk8w0/64zqqfPHJGVkaFnuaLgNpPpusEKDhxHJOb7lg86iTt2y86FQHVBXtYVXk5d87RYRmBooUsNtvLZlklE9UgxgequpWXG1GhvkwlmjuqmI+RS4NoLXnasJl//TbU+fE1AwRowS0Rg',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];