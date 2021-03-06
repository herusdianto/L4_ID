<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted"             => "Inputan :attribute harus diterima.",
    "active_url"           => "Inputan :attribute bukan URL yang valid.",
    "after"                => "Inputan :attribute harus berupa tanggal setelah :date.",
    "alpha"                => "Inputan :attribute harus berupa huruf.",
    "alpha_dash"           => "Inputan :attribute harus berupa huruf, nomor, dan garis bawah.",
    "alpha_num"            => "Inputan :attribute harus berupa huruf dan nomor.",
    "array"                => "Inputan :attribute harus berupa array.",
    "before"               => "Inputan :attribute harus berupa tanggal sebelum :date.",
    "between"              => [
        "numeric" => "Inputan :attribute harus antara :min dan :max.",
        "file"    => "Inputan :attribute harus antara :min dan :max kilobytes.",
        "string"  => "Inputan :attribute harus antara :min dan :max karakter.",
        "array"   => "Inputan :attribute harus mempunyai antara :min dan :max item.",
    ],
    "boolean"              => "Inputan :attribute harus benar atau salah.",
    "confirmed"            => "Inputan konfirmasi :attribute tidak sama.",
    "date"                 => "Inputan :attribute bukan tanggal.",
    "date_format"          => "Inputan :attribute tidak sama dengan format :format.",
    "different"            => "Inputan :attribute dan :other harus berbeda.",
    "digits"               => "Inputan :attribute harus :digits digit.",
    "digits_between"       => "Inputan :attribute harus antara :min dan :max digit.",
    "email"                => "Inputan :attribute harus berupa email.",
    "exists"               => "Inputan :attribute tidak ditemukan.",
    "image"                => "Inputan :attribute harus berupa gambar.",
    "in"                   => "Inputan :attribute yang dipilih tidak cocok.",
    "integer"              => "Inputan :attribute harus berupa bilangan bulat.",
    "ip"                   => "Inputan :attribute harus berupa IP.",
    "max"                  => [
        "numeric" => "Inputan :attribute tidak boleh lebih dari :max.",
        "file"    => "Inputan :attribute tidak boleh lebih dari :max kilobytes.",
        "string"  => "Inputan :attribute tidak boleh lebih dari :max karakter.",
        "array"   => "Inputan :attribute tidak boleh memiliki lebih dari :max item.",
    ],
    "mimes"                => "Inputan :attribute harus berupa file: :values.",
    "min"                  => [
        "numeric" => "Inputan :attribute minimal harus :min.",
        "file"    => "Inputan :attribute minimal harus :min kilobytes.",
        "string"  => "Inputan :attribute minimal harus :min karakter.",
        "array"   => "Inputan :attribute minimal harus memiliki :min item.",
    ],
    "not_in"               => "Inputan :attribute yang dipilih tidak valid.",
    "numeric"              => "Inputan :attribute harus berupa nomor.",
    "regex"                => "Format inputan :attribute tidak valid.",
    "required"             => "Inputan :attribute harus diisi.",
    "required_if"          => "Inputan :attribute harus diisi ketika :other diisi :value.",
    "required_with"        => "Inputan :attribute harus diisi ketika :values diisi.",
    "required_with_all"    => "Inputan :attribute harus diisi ketika :values diisi.",
    "required_without"     => "Inputan :attribute harus diisi ketika :values tidak diisi.",
    "required_without_all" => "Inputan :attribute harus diisi ketika tidak satupun :values diisi.",
    "same"                 => "Inputan :attribute dan :other harus sama.",
    "size"                 => [
        "numeric" => "Inputan :attribute harus :size.",
        "file"    => "Inputan :attribute harus :size kilobytes.",
        "string"  => "Inputan :attribute harus :size karakter.",
        "array"   => "Inputan :attribute harus memiliki :size item.",
    ],
    "unique"               => "Inputan :attribute sudah ada.",
    "url"                  => "Inputan :attribute tidak valid.",
    "timezone"             => "Inputan :attribute harus berupa timezone.",
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes'           => [],

];
