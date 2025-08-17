# langPackDifference

**Description** : *Changes to the app's localization pack*

**Layer** : 211

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
	lang_code : '2aRxoMlb3g1JKZj5',
	from_version : 71,
	version : 10,
	strings : array(
		$client->langPackString(
			key : '3XaUVsg0rP6ptbJD',
			value : '3eSZWdtN4owkc21V',
		),
		$client->langPackStringPluralized(
			key : 'uRPsvb1mKSCdTneO',
			zero_value : 'x3qGeyKwgz8vJ46s',
			one_value : 'dUlSTxvN6oBcawVn',
			two_value : 'm12PgzYkoLEqlf7U',
			few_value : 'c2dYs4tjK8eTxo07',
			many_value : 'EPrpChVatKwBxbqS',
			other_value : 'Op3RKDokeHxFSbgm',
		),
		$client->langPackStringDeleted(
			key : 'w5Xp7JionRYf0O9m',
		),
	),
);
```