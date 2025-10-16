# help.countriesList

**Description** : *Name, ISO code, localized name and phone codes/patterns of all available countries*

**Layer** : 216

```tl
help.countriesList#87d0759e countries:Vector<help.Country> hash:int = help.CountriesList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>countries</mark> | [`Vector<help.Country>`](type/help.Country) | Name, ISO code, localized name and phone codes/patterns of all available countries |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |

---

## Type

[help.CountriesList](type/help.CountriesList)

---

## Example

```php
$helpCountriesList = $client->help->countriesList(
	countries : array(
		$client->help->country(
			hidden : true,
			iso2 : 'WCadehnSuRxqF9bX',
			default_name : 'k7dplGntBVr6Uhco',
			name : 'gydFAlTnb7RjNxMU',
			country_codes : array(
				$client->help->countryCode(
					country_code : 'p2hZUAiEuPFQMmT4',
					prefixes : array('FyPROf3qgcAJzeXM'),
					patterns : array('moaGzWDBdhi10R5j'),
				),
			),
		),
	),
	hash : 0,
);
```