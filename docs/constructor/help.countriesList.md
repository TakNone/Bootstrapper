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
			iso2 : 'C6urRsDadoAfNn8M',
			default_name : 'JxN5jvnm6BPwOMsp',
			name : 'TrXkzW3woJpmqyY7',
			country_codes : array(
				$client->help->countryCode(
					country_code : 'iExTP8tO1VwSyFpG',
					prefixes : array('r27cKsHeRE8GB6N0'),
					patterns : array('O4AGdgqzHV0lnFrI'),
				),
			),
		),
	),
	hash : 0,
);
```