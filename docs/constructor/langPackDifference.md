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
	lang_code : 'lKf1Aveyh6T8q3Ii',
	from_version : 40,
	version : 100,
	strings : array(
		$client->langPackString(
			key : '1nYoCmxJODSF8Uk7',
			value : '7dsE24Vth1FrzcbA',
		),
		$client->langPackStringPluralized(
			key : 'EFOjJGfT4a8bR0zy',
			zero_value : '5OWAbIqdvR81oDNk',
			one_value : 'GORv19TlzdiuLCwc',
			two_value : 'E2IPc3sDjnFXYHyK',
			few_value : 'Db1HP9dUTrpgxK6J',
			many_value : 'i7DuRISK6Hkwpz8T',
			other_value : 'JnGgA51iEqDbPBUo',
		),
		$client->langPackStringDeleted(
			key : 'c34mz0HeT5NXKG62',
		),
	),
);
```