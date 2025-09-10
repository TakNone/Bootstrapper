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
			iso2 : 'rtHRVxMPqg0J7EF9',
			default_name : '18v5rah6gemXEPo9',
			name : 'UAwR9z3i4fSubaDF',
			country_codes : array(
				$client->help->countryCode(
					country_code : 'zj0qWcHY9vZmefIG',
					prefixes : array('0LligQsDw36VWuRz'),
					patterns : array('YtUbMdpEso0HAauO'),
				),
			),
		),
	),
	hash : 0,
);
```