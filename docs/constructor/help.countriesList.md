# help.countriesList

**Description** : *Name, ISO code, localized name and phone codes/patterns of all available countries*

**Layer** : 211

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
			iso2 : 'zJLc1Eib5CqZpaBg',
			default_name : 'VWYon62qFrMwmRyi',
			name : 'JKvZaF8sAI3VmSXu',
			country_codes : array(
				$client->help->countryCode(
					country_code : '3X7MrqfE4jgLPY9W',
					prefixes : array('kaHARlSCgQqtfb73'),
					patterns : array('LZvR1XD2fiyHMBsr'),
				),
			),
		),
	),
	hash : 63,
);
```