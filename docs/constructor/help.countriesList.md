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
			iso2 : 'K8WiXNLa2klS9Bgv',
			default_name : 'QFeRl9wzP53bOdtk',
			name : '5ETLC31DbNRFmqxe',
			country_codes : array(
				$client->help->countryCode(
					country_code : 'qNU5KgrEaBsf0mne',
					prefixes : array('il1TKe5xjU3kGaBM'),
					patterns : array('TSgrQjqGoH1Uc9PF'),
				),
			),
		),
	),
	hash : 0,
);
```