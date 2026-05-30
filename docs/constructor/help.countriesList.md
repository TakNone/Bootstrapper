# help.countriesList

**Description** : *Name, ISO code, localized name and phone codes/patterns of all available countries*

**Layer** : 225

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
			iso2 : 's2VEURo4ekXDWQli',
			default_name : 'zQDISUuJYtm3rvhf',
			name : '3P4F2LTwEmb6Ka1z',
			country_codes : array(
				$client->help->countryCode(
					country_code : 'dtN6q2WDbsYx4HwX',
					prefixes : array('wve0NiQW1pxtYnJ4'),
					patterns : array('IYaMUr30ijxmzs82'),
				),
			),
		),
	),
	hash : 0,
);
```