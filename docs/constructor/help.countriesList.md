# help.countriesList

**Description** : *Name, ISO code, localized name and phone codes/patterns of all available countries*

**Layer** : 214

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
			iso2 : 'dwjxFmCAqX4Y2u1k',
			default_name : 'p3dQNmDFB7Pa2Z5M',
			name : 'KMUosqhyBZI7kixR',
			country_codes : array(
				$client->help->countryCode(
					country_code : 'paS7TsRonABDLQhU',
					prefixes : array('fWugcUSzNl25yvJH'),
					patterns : array('4gDejI1CLr2cRMHY'),
				),
			),
		),
	),
	hash : 9,
);
```