<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

function find(string $findSubject, array $arr): bool
{
    foreach ($arr as $value) {
        if (is_array($value)) {
            return find($findSubject, $value);
        } elseif ($value == $findSubject) {
            return true;
        }
    }
    return false;
}

$subjectName = readline('Введите название предмета, который будем искать: ');

var_dump(find($subjectName, $box));

//не могу понять, почему не все значения находит как true
