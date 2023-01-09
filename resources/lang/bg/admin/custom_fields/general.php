<?php

return [
    'custom_fields'		        => 'Потребителски полета',
    'manage'                    => 'Управление',
    'field'		                => 'Поле',
    'about_fieldsets_title'		=> 'Относно Fieldsets',
    'about_fieldsets_text'		=> '"Група от полета" позволяват създаването на групи от персонализирани полета, които се използват и преизползват често за специфични типове модели на активи.',
    'custom_format'             => 'Персонализиран формат...',
    'encrypt_field'      	        => 'Шифроване на стойността на това поле в базата данни',
    'encrypt_field_help'      => 'ВНИМАНИЕ: Шифроване на поле го прави невалидно за търсене.',
    'encrypted'      	        => 'Шифровано',
    'fieldset'      	        => 'Fieldset',
    'qty_fields'      	      => 'Qty Fields',
    'fieldsets'      	        => 'Fieldsets',
    'fieldset_name'           => 'Fieldset имена',
    'field_name'              => 'Име на поле',
    'field_values'            => 'Стойност на поле',
    'field_values_help'       => 'Добавяне на избираеми опции, по една на ред. Празни редове, различни от първия ред ще бъдат пренебрегнати.',
    'field_element'           => 'Елемент на формуляра',
    'field_element_short'     => 'Елемент',
    'field_format'            => 'Формат',
    'field_custom_format'     => 'Персонализиран формат',
    'field_custom_format_help'     => 'Това поле позволява да използвате регулярен израз за валидация. За да го използвате, валидацията трябва да започва с "regex:" - например, за да потвърдите, че стойността на персонализираното поле съдържа валиден IMEI (15 цифри), можете да използвате <code>regex: / ^[0-9]{15}$ /</code>.',
    'required'   		          => 'Задължителен',
    'req'   		              => 'Req.',
    'used_by_models'   		    => 'Използвани от модели ',
    'order'   		            => 'Ред',
    'create_fieldset'         => 'Нов Fieldset',
    'create_fieldset_title' => 'Създай нова група от полета',
    'create_field'            => 'Ново персонализирано поле',
    'create_field_title' => 'Създай ново персонализирано поле',
    'value_encrypted'      	        => 'Стойността на това поле е криптирана в базата данни. Само администратор потребители ще бъде в състояние да видят дешифрираната стойност',
    'show_in_email'     => 'Да се включи ли стойността на това поле в електронната поща, изпращана към потребителите? Криптираните полета не могат да бъдат включвани в изпращаните електронни пощи.',
    'help_text' => 'Помощен текст',
    'help_text_description' => 'Това е допълнителен текст, който ще се появява под формата с елементите докато редактирате актив описващ значението на полето.',
    'about_custom_fields_title' => 'Отностно Персонализирани Полета',
    'about_custom_fields_text' => 'Персонализираните полета ви дават възможност да добавите атрибути към активите.',
    'add_field_to_fieldset' => 'Добави поле към група от полета',
    'make_optional' => 'Задължително - щракнете за да го направите незадължително',
    'make_required' => 'Незадължително - щракнете за да го направите задължително',
    'reorder' => 'Пренареждане',
    'db_field' => 'DB Field',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code>:db_column</code> but should be <code>:expected</code>.',
    'is_unique' => 'This value must be unique across all assets',
    'unique' => 'Unique',
    'display_in_user_view' => 'Allow the checked out user to view these values in their View Assigned Assets page',
    'display_in_user_view_table' => 'Visible to User',
];
