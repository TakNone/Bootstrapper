# help.country

**Description** : *Name, ISO code, localized name and phone codes/patterns of a specific country*

**Layer** : 216

```tl
help.country#c3878e23 flags:# hidden:flags.0?true iso2:string default_name:string name:flags.1?string country_codes:Vector<help.CountryCode> = help.Country;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **hidden** | [`flags.0?true`](type/true) | Whether this country should not be shown in the list |
| <mark>iso2</mark> | [`string`](type/string) | ISO code of country |
| <mark>default_name</mark> | [`string`](type/string) | Name of the country in the country's language |
| **name** | [`flags.1?string`](type/string) | Name of the country in the user's language, if different from the original name |
| <mark>country_codes</mark> | [`Vector<help.CountryCode>`](type/help.CountryCode) | Phone codes/patterns |

---

## Type

[help.Country](type/help.Country)

---

## Example

```php
$helpCountry = $client->help->country(
	hidden : true,
	iso2 : 'ERSN3x48kQcGK1Dm',
	default_name : 'pAB6XVdfjMP5tkw3',
	name : 'mLX57ayK9fuzpGo4',
	country_codes : array(
		$client->help->countryCode(
			country_code : '8el9XDnBgtuFsTH1',
			prefixes : array('dbfeMu9PL5cGQITr'),
			patterns : array('GQBjfTZlHAPxwnJ3'),
		),
	),
);
```