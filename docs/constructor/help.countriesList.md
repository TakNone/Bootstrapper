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
			iso2 : 'KZ3mQIRMPD8OTA2q',
			default_name : 'jhRnfilDbyFXEPtO',
			name : 'p8EAmeMrRgDbPQ5Y',
			country_codes : array(
				$client->help->countryCode(
					country_code : '18HdI7OnjzYcURfl',
					prefixes : array('GmRc5Q09Y314r6oe'),
					patterns : array('mzGBixIjtfZp1Un7'),
				),
			),
		),
	),
	hash : 0,
);
```