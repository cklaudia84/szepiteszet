<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    //
	//  --------------------------------------------------------------------
	public $book =
			
	[
		'name' =>
	[
		'rules' => 'required|min_length[3]',
		'errors' => 
		[
			'required' => 'Teljes név megadása kötelező!',
			'min_length' => 'A beírt név túl rövid!'
		]
	],
		'email' => 
		[
			'rules' => 'required|valid_email',
			'errors' =>
			[
				'required' => 'E-mail cím megadása kötelező!',
				'valid_email' => 'Valós e-mail cím megadása szükséges!'
			]
		],
		'phone' => 
		[
			'rules' => 'required|regex_match[/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/]',
			'errors' =>
			[
				'required' => 'Telefonszám megadása kötelező!',
				'regex_match' => 'Valós telefonszám megadása szükséges!'
			]
		],
		'service_type' =>
		[
			'rules' => 'required',
			'errors' =>
			[
				'required' => 'Szolgáltatás típusának kiválasztása kötelező!'
			]
		],
		'service_name' =>
		[
			'rules' => 'required',
			'errors' =>
			[
				'required' => 'Szolgáltatás megnevezésének kiválasztása kötelező!'
			]
		],
		'time' =>
		[
			'rules' => 'required',
			'errors' => 
			[
			'required' => 'Az időpont kiválasztása kötelező!'
			]
		],
		'accept' =>
		[
			'rules' => 'required',
			'errors' => 
			[
			'required' => 'A feltételek elfogadása kötelező!'
			]
		]
	];
	public $contact =
			
	[
		'name' =>
	[
		'rules' => 'required|min_length[3]',
		'errors' => 
		[
			'required' => 'Teljes név megadása kötelező!',
			'min_length' => 'A beírt név túl rövid!'
		]
	],
		'email' => 
		[
			'rules' => 'required|valid_email',
			'errors' =>
			[
				'required' => 'E-mail cím megadása kötelező!',
				'valid_email' => 'Valós e-mail cím megadása szükséges!'
			]
		],
		'phone' => 
		[
			'rules' => 'required|regex_match[/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/]',
			'errors' =>
			[
				'required' => 'Telefonszám megadása kötelező!',
				'regex_match' => 'Valós telefonszám megadása szükséges!'
			]
		],
		'subject' =>
		[
			'rules' => 'required',
			'errors' =>
			[
				'required' => 'Tárgy megadása kötelező!'
			]
		],
		'message' =>
		[
			'rules' => 'required',
			'errors' =>
			[
				'required' => 'Üzenet megadása kötelező!'
			]
		],
		'accept' =>
		[
			'rules' => 'required',
			'errors' => 
			[
			'required' => 'A feltételek elfogadása kötelező!'
			]
		]
	];
}
