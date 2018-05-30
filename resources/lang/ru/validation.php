<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Последующие языковые строки содержат сообщения по-умолчанию, используемые
    | классом, проверяющим значения (валидатором). Некоторые из правил имеют
    | несколько версий, например, size. Вы можете поменять их на любые
    | другие, которые лучше подходят для вашего приложения.
    |
    */

    'accepted' => 'Вы должны принять :attribute.',
    'active_url' => 'Друг, поле :attribute содержит недействительный URL.',
    'after' => 'Друг, в поле :attribute должна быть дата после :date.',
    'after_or_equal' => 'Друг, в поле :attribute должна быть дата после или равняться :date.',
    'alpha' => 'Друг, поле :attribute может содержать только буквы.',
    'alpha_dash' => 'Друг, поле :attribute может содержать только буквы, цифры и дефис.',
    'alpha_num' => 'Друг, поле :attribute может содержать только буквы и цифры.',
    'array' => 'Друг, поле :attribute должно быть массивом.',
    'before' => 'Друг, в поле :attribute должна быть дата до :date.',
    'before_or_equal' => 'Друг, в поле :attribute должна быть дата до или равняться :date.',
    'between' => [
        'numeric' => 'Друг, в поле :attribute должно быть между :min и :max.',
        'file' => 'Друг, размер файла в  поле :attribute должен быть между :min и :max Килобайт(а).',
        'string' => 'Друг, количество символов в поле :attribute должно быть между :min и :max.',
        'array' => 'Друг, количество элементов в поле :attribute должно быть между :min и :max.',
    ],
    'boolean' => 'Друг, поле :attribute должно иметь значение логического типа.', // калька 'истина' или 'ложь' звучала бы слишком неестественно
    'confirmed' => 'Друг, поле :attribute не совпадает с подтверждением.',
    'date' => 'Друг, поле :attribute не является датой.',
    'date_format' => 'Друг, поле :attribute не соответствует формату :format.',
    'different' => 'Поля :attribute и :other должны различаться.',
    'digits' => 'Длина цифрового поля :attribute должна быть :digits.',
    'digits_between' => 'Длина цифрового поля :attribute должна быть между :min и :max.',
    'dimensions' => 'Друг, поле :attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Друг, поле :attribute содержит повторяющееся значение.',
    'email' => 'Друг, поле :attribute должно быть действительным электронным адресом.',
    'file' => 'Друг, поле :attribute должно быть файлом.',
    'filled' => 'Друг, поле :attribute обязательно для заполнения.',
    'exists' => 'Выбранное значение для :attribute некорректно.',
    'gt' => [
        'numeric' => 'Друг, поле :attribute должно быть больше :value.',
        'file' => 'Друг, размер файла в поле :attribute должен быть больше :value Килобайт(а).',
        'string' => 'Друг, количество символов в поле :attribute должно быть больше :value.',
        'array' => 'Друг, количество элементов в поле :attribute должно быть больше :value.',
    ],
    'gte' => [
        'numeric' => 'Друг, поле :attribute должно быть больше или равно :value.',
        'file' => 'Друг, размер файла в поле :attribute должен быть больше или равен :value Килобайт(а).',
        'string' => 'Друг, количество символов в поле :attribute должно быть больше или равно :value.',
        'array' => 'Друг, количество элементов в поле :attribute должно быть больше или равно.',
    ],
    'image' => 'Друг, поле :attribute должно быть изображением.',
    'in' => 'Выбранное значение для :attribute ошибочно.',
    'in_array' => 'Друг, поле :attribute не существует в :other.',
    'integer' => 'Друг, поле :attribute должно быть целым числом.',
    'ip' => 'Друг, поле :attribute должно быть действительным IP-адресом.',
    'ipv4' => 'Друг, поле :attribute должно быть действительным IPv4-адресом.',
    'ipv6' => 'Друг, поле :attribute должно быть действительным IPv6-адресом.',
    'json' => 'Друг, поле :attribute должно быть JSON строкой.',
    'lt' => [
        'numeric' => 'Друг, поле :attribute должно быть меньше :value.',
        'file' => 'Друг, размер файла в поле :attribute должен быть меньше :value Килобайт(а).',
        'string' => 'Друг, количество символов в поле :attribute должно быть меньше :value.',
        'array' => 'Друг, количество элементов в поле :attribute должно быть меньше :value.',
    ],
    'lte' => [
        'numeric' => 'Друг, поле :attribute должно быть меньше или равно :value.',
        'file' => 'Друг, размер файла в поле :attribute должен быть меньше или равен :value Килобайт(а).',
        'string' => 'Друг, количество символов в  поле :attribute должно быть меньше или равно :value.',
        'array' => 'Друг, количество элементов в поле :attribute должно быть меньше или равно.',
    ],
    'max' => [
        'numeric' => 'Друг, поле :attribute не может быть более :max.',
        'file' => 'Друг, размер файла в поле :attribute не может быть более :max Килобайт(а).',
        'string' => 'Друг, количество символов в поле :attribute не может превышать :max.',
        'array' => 'Друг, количество элементов в поле :attribute не может превышать :max.',
    ],
    'mimes' => 'Друг, поле :attribute должно быть файлом одного из следующих типов: :values.',
    'mimetypes' => 'Друг, поле :attribute должно быть файлом одного из следующих типов: :values.',
    'min' => [
        'numeric' => 'Друг, поле :attribute должно быть не менее :min.',
        'file' => 'Размер файла в Друг, поле :attribute должен быть не менее :min Килобайт(а).',
        'string' => 'Количество символов в Друг, поле :attribute должно быть не менее :min.',
        'array' => 'Количество элементов в Друг, поле :attribute должно быть не менее :min.',
    ],
    'not_in' => 'Выбранное значение для :attribute ошибочно.',
    'not_regex' => 'Выбранный формат для :attribute ошибочный.',
    'numeric' => 'Друг, поле :attribute должно быть числом.',
    'present' => 'Друг, поле :attribute должно присутствовать.',
    'regex' => 'Друг, поле :attribute имеет ошибочный формат.',
    'required' => 'Друг, поле :attribute обязательно для заполнения.',
    'required_if' => 'Друг, поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_unless' => 'Друг, поле :attribute обязательно для заполнения, когда :other не равно :values.',
    'required_with' => 'Друг, поле :attribute обязательно для заполнения, когда :values указано.',
    'required_with_all' => 'Друг, поле :attribute обязательно для заполнения, когда :values указано.',
    'required_without' => 'Друг, поле :attribute обязательно для заполнения, когда :values не указано.',
    'required_without_all' => 'Друг, поле :attribute обязательно для заполнения, когда ни одно из :values не указано.',
    'same' => 'Значение :attribute должно совпадать с :other.',
    'size' => [
        'numeric' => 'Друг, поле :attribute должно быть равным :size.',
        'file' => 'Друг, размер файла в поле :attribute должен быть равен :size Килобайт(а).',
        'string' => 'Количество символов в Друг, поле :attribute должно быть равным :size.',
        'array' => 'Количество элементов в Друг, поле :attribute должно быть равным :size.',
    ],
    'string' => 'Друг, поле :attribute должно быть строкой.',
    'timezone' => 'Друг, поле :attribute должно быть действительным часовым поясом.',
    'unique' => 'Такое значение поля :attribute уже существует.',
    'uploaded' => 'Загрузка поля :attribute не удалась.',
    'url' => 'Друг, поле :attribute имеет ошибочный формат.',

    /*
    |--------------------------------------------------------------------------
    | Собственные языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Здесь Вы можете указать собственные сообщения для атрибутов.
    | Это позволяет легко указать свое сообщение для заданного правила атрибута.
    |
    | http://laravel.com/docs/validation#custom-error-messages
    | Пример использования
    |
    |   'custom' => [
    |       'email' => [
    |           'required' => 'Нам необходимо знать Ваш электронный адрес!',
    |       ],
    |   ],
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'pic' => [
		    'image' => 'Друг, поле с фотографией должно быть картинкой формата (jpg, png, gif)',
		    'required' => 'Друг, ты забыл выбрать фотографию.',
		],
    ],

    /*
    |--------------------------------------------------------------------------
    | Собственные названия атрибутов
    |--------------------------------------------------------------------------
    |
    | Последующие строки используются для подмены программных имен элементов
    | пользовательского интерфейса на удобочитаемые. Например, вместо имени
    | поля "email" в сообщениях будет выводиться "электронный адрес".
    |
    | Пример использования
    |
    |   'attributes' => [
    |       'email' => 'электронный адрес',
    |   ],
    |
    */

    'attributes' => [
    	'pic' => 'фото',
    	'title' => 'заголовок',
    ],
];


?>