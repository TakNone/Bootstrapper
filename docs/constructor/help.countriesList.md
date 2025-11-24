# help.countriesList

**Description** : *Name, ISO code, localized name and phone codes/patterns of all available countries*

**Layer** : 218

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
			iso2 : '1YOcZrv5k4m6UR8d',
			default_name : 'S75I09nWVYhuatNz',
			name : 'Lu9vD7WYnZbCmRMp',
			country_codes : array(
				$client->help->countryCode(
					country_code : 'i2EeCovNLcsGJVpa',
					prefixes : array('IMZaNGkLdUuptYhb'),
					patterns : array('tO5VjxoimT8ZW93d'),
				),
			),
		),
	),
	hash : 0,
);
```