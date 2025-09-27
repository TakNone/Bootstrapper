# langPackDifference

**Description** : *Changes to the app&#039;s localization pack*

**Layer** : 214

```tl
langPackDifference#f385c1f6 lang_code:string from_version:int version:int strings:Vector<LangPackString> = LangPackDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_code</mark> | [`string`](type/string) | Language code |
| <mark>from_version</mark> | [`int`](type/int) | Previous version number |
| <mark>version</mark> | [`int`](type/int) | New version number |
| <mark>strings</mark> | [`Vector<LangPackString>`](type/LangPackString) | Localized strings |

---

## Type

[LangPackDifference](type/LangPackDifference)

---

## Example

```php
$langPackDifference = $client->langPackDifference(
	lang_code : 'lbt1UxWHoFwMCSnV',
	from_version : 29,
	version : 73,
	strings : array(
		$client->langPackString(
			key : 'nAirKNO4y18CmpDw',
			value : 'LHty387puaSmclC5',
		),
		$client->langPackStringPluralized(
			key : 'Ity8EYJcjLZpnwXx',
			zero_value : 'zrs16UdCWh09KtoQ',
			one_value : 'UKveIp6RVf71JhNC',
			two_value : 'VI2TruKBPDUOn5Wa',
			few_value : 'kEpqrfKM3nxGeRBz',
			many_value : '4I2Ypa8KNQzLE7iO',
			other_value : 'xgZnkT20D5qvafFd',
		),
		$client->langPackStringDeleted(
			key : 'xtyXdla8biLNmYwS',
		),
	),
);
```