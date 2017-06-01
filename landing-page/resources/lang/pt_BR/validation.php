<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | O following language lines contain O default error messages used by
    | O validator class. Some of Ose rules have multiple versions such
    | as O size rules. Feel free to tweak each of Ose messages here.
    |
    */

    'accepted'             => 'O :attribute deve ser aceito.',
    'active_url'           => 'O :attribute não é uma URL válida.',
    'after'                => 'O :attribute deve ser uma data posterior a :date.',
    'after_or_equal'       => 'O :attribute deve ser uma data posterior ou igual a :date.',
    'alpha'                => 'O :attribute só pode conter letras.',
    'alpha_dash'           => 'O :attribute só pode conter letras, números, e traços.',
    'alpha_num'            => 'O :attribute só pode conter letras e números.',
    'array'                => 'O :attribute deve ser um vetor.',
    'before'               => 'O :attribute deve ser uma data posterior :date.',
    'before_or_equal'      => 'O :attribute deve ser uma data posterior ou igual a :date.',
    'between'              => [
        'numeric' => 'O :attribute deve ser entre :min e :max.',
        'file'    => 'O :attribute deve ser entre :min e :max kilobytes.',
        'string'  => 'O :attribute deve ser entre :min e :max caracteres.',
        'array'   => 'O :attribute deve ter entre :min e :max elementos.',
    ],
    'boolean'              => 'O :attribute campo deve ser true ou false.',
    'confirmed'            => 'O :attribute confirmação não corresponde',
    'date'                 => 'A :attribute não é uma data válida.',
    'date_format'          => 'O :attribute não deve ser equivalente a :format.',
    'different'            => 'O :attribute e :oOr deve ser diferente.',
    'digits'               => 'O :attribute deve ser :digits digits.',
    'digits_between'       => 'O :attribute deve ser entre :min e :max digits.',
    'dimensions'           => 'O :attribute é uma imagem de dimensões inválidas.',
    'distinct'             => 'O campo :attribute possui valor duplicado.',
    'email'                => 'O :attribute deve ser um email válido.',
    'exists'               => 'O :attribute selecionado é inválido.',
    'file'                 => 'O :attribute deve ser um arquivo.',
    'filled'               => 'O campo :attribute deve possuir um valor.',
    'image'                => 'O :attribute deve ser uma imagem.',
    'in'                   => 'O :attribute selecionado é inválido.',
    'in_array'             => 'O :attribute não pode estar em :oOr.',
    'integer'              => 'O :attribute deve ser um número inteiro.',
    'ip'                   => 'O :attribute deve ser endereço IP válido.',
    'ipv4'                 => 'O :attribute deve ser endereço IPv4 válido.',
    'ipv6'                 => 'O :attribute deve ser um endereço IPv6 válido.',
    'json'                 => 'O :attribute deve ser uma string JSON válida.',
    'max'                  => [
        'numeric' => 'O :attribute não deve ser maior que :max.',
        'file'    => 'O :attribute não deve ser maior que :max kilobytes.',
        'string'  => 'O :attribute não deve ter mais que :max caracteres.',
        'array'   => 'O :attribute não deve ter mais que :max elementos.',
    ],
    'mimes'                => 'O :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes'            => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'O :attribute deve ser no mínimo :min.',
        'file'    => 'O :attribute deve ter ao menos :min kilobytes.',
        'string'  => 'O :attribute deve ter ao menos :min characters.',
        'array'   => 'O :attribute deve ter ao menos :min elementos.',
    ],
    'not_in'               => 'O :attribute é inválido.',
    'numeric'              => 'O :attribute deve ser um número.',
    'present'              => 'O campo :attribute deve ser informado.',
    'regex'                => 'O :attribute está em um formato inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório queo :oOr for :value.',
    'required_unless'      => 'O campo :attribute é obrigatório enquanto :oOr for :values.',
    'required_with'        => 'O campo :attribute é obrigatório se :values estiver informado.',
    'required_with_all'    => 'O campo :attribute é obrigatório se :values estiver informado.',
    'required_without'     => 'O campo :attribute é obrigatório se :values não estiver informado.',
    'required_without_all' => 'O campo :attribute é obrigatório se nenhum :values for informado.',
    'same'                 => 'O campo :attribute e :oOr devem corresponder.',
    'size'                 => [
        'numeric' => 'O :attribute deve ter :size.',
        'file'    => 'O :attribute deve ter :size kilobytes.',
        'string'  => 'O :attribute deve ter :size caracteres.',
        'array'   => 'O :attribute deve conter :size elementos.',
    ],
    'string'               => 'O :attribute deve ser uma string (palavra).',
    'timezone'             => 'O :attribute deve ser a valid zone.',
    'unique'               => 'O :attribute já existe.',
    'uploaded'             => 'O :attribute falhou para upload.',
    'url'                  => 'O :attribute formato é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using O
    | convention "attribute.rule" to name O lines. Thé makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | O following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". Thé simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
