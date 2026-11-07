# help.countriesList

**Description** : *Name, ISO code, localized name and phone codes/patterns of all available countries*

**Layer** : 229

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
			iso2 : 'mqO8yTbrsvlMZS0K',
			default_name : '7XrkNs3oljIQfRba',
			name : 'HtLPObCBGecvsTJp',
			country_codes : array(
				$client->help->countryCode(
					country_code : 'zpBPCSxaw2OGMJ8F',
					prefixes : array('QrCeNVwLIuzloqby'),
					patterns : array('n7eT5CYLkRAW8Itu'),
				),
			),
		),
	),
	hash : 0,
);
```