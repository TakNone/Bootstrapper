# help.countriesList

**Description** : *Name, ISO code, localized name and phone codes/patterns of all available countries*

**Layer** : 227

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
			iso2 : '905qe7BglbHmZNrx',
			default_name : 'kgdByArpERo6bKMw',
			name : 'LRkuOED7PNvTpCsB',
			country_codes : array(
				$client->help->countryCode(
					country_code : 'jVHJ86tqkyvI97io',
					prefixes : array('btRf9qMcoKJr6hLB'),
					patterns : array('PIAZEpnSW8x5uXQU'),
				),
			),
		),
	),
	hash : 0,
);
```