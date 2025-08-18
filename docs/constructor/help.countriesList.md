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
			iso2 : '4RLbCeI65pnh1ZJr',
			default_name : 'eT8UCSofHgrhLIiJ',
			name : 'iPuLS7rotpAXgHx0',
			country_codes : array(
				$client->help->countryCode(
					country_code : 'cCtvm6QzRb0IqL3P',
					prefixes : array('w4OyfdSMHZN6Do7I'),
					patterns : array('ZjW21rsuPaX6Cqk3'),
				),
			),
		),
	),
	hash : 37,
);
```