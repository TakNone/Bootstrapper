# help.countriesList

**Description** : *Name, ISO code, localized name and phone codes/patterns of all available countries*

**Layer** : 222

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
			iso2 : '96z1qXYdvBFM0auA',
			default_name : 'TEIOV43csnqAGhvy',
			name : 'ugQiAcIUoSEP70Vv',
			country_codes : array(
				$client->help->countryCode(
					country_code : 'gi92OxXWSnQ4kyw6',
					prefixes : array('UKs3qxzThfXraNWp'),
					patterns : array('SmtRevOCgBij4wd7'),
				),
			),
		),
	),
	hash : 0,
);
```