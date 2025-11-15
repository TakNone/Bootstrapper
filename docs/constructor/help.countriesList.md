# help.countriesList

**Description** : *Name, ISO code, localized name and phone codes/patterns of all available countries*

**Layer** : 216

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
			iso2 : 'aZrd9WkvphBy8suC',
			default_name : 'yx3ECzkMXBpJoIP7',
			name : '37iRp4GsPVMBzF6A',
			country_codes : array(
				$client->help->countryCode(
					country_code : 'lODTXC9zj14qZo8r',
					prefixes : array('KE4ekFAXHy59w2Gz'),
					patterns : array('ECMmSJj86cq3Y0lF'),
				),
			),
		),
	),
	hash : 0,
);
```