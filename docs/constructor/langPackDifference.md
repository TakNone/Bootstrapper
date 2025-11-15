# langPackDifference

**Description** : *Changes to the app&#039;s localization pack*

**Layer** : 216

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
	lang_code : 'fqHi4LSP8ZtjIUbr',
	from_version : 3,
	version : 80,
	strings : array(
		$client->langPackString(
			key : 'pLSvcP8oh2XnmTiE',
			value : 'WbKo91NVOtkhT2Yr',
		),
		$client->langPackStringPluralized(
			key : 'vOhNKUuFBqAmJW3L',
			zero_value : 'gkNBKsnvuYAUjVpR',
			one_value : '7LIpOCv8DzusG5b2',
			two_value : '2achgM7zjAeGs5rN',
			few_value : 'keyztLuqYx798naZ',
			many_value : 'msh6wyEBc20Z9bIl',
			other_value : 'FLQXvARkl9CeJiah',
		),
		$client->langPackStringDeleted(
			key : 'OxZiFCI3U9jgQsNy',
		),
	),
);
```