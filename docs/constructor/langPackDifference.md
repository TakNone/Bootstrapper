# langPackDifference

**Description** : *Changes to the app&#039;s localization pack*

**Layer** : 218

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
	lang_code : 'woeXs12QkqTdR94g',
	from_version : 53,
	version : 39,
	strings : array(
		$client->langPackString(
			key : 'aKPZkOM2ElzQDdRL',
			value : 'Tx0k4GYmtZqWR8n3',
		),
		$client->langPackStringPluralized(
			key : 'Uo9f0VyuYKFtXDxW',
			zero_value : 'ibkzveIxdPKTyJU3',
			one_value : 'eKcsNFrXWEq0zpYH',
			two_value : 'Q5HnmGqrg8hTs7K4',
			few_value : 'amK6vo5ZSCxDGRIz',
			many_value : '26BnmkTy7IH9G1tL',
			other_value : 'uD7d8WqnbBUQ5ox0',
		),
		$client->langPackStringDeleted(
			key : 'AUCI0X5se8aGOwTY',
		),
	),
);
```