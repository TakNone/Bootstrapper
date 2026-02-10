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
			iso2 : 'YH0dm7uPrFUjDb1t',
			default_name : 'pDigFVHEBGP4Ov6u',
			name : 'c6qinNS9Vo0eIdRu',
			country_codes : array(
				$client->help->countryCode(
					country_code : '6tlLmRXwSgCN0D59',
					prefixes : array('1ifVa6CdgQP9HmsZ'),
					patterns : array('N13Ymarb4d2IBRqJ'),
				),
			),
		),
	),
	hash : 0,
);
```