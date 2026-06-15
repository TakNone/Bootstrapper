# langPackDifference

**Description** : *Changes to the app&#039;s localization pack*

**Layer** : 227

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
	lang_code : 'f30toaw1cvJS92g4',
	from_version : 9,
	version : 90,
	strings : array(
		$client->langPackString(
			key : 'ZeyGqVLA58F73K4w',
			value : 'aQBz4v93VjJRstxH',
		),
		$client->langPackStringPluralized(
			key : 'cAEwd6jBkClhDFfH',
			zero_value : 'viSxsb7Tl0eqAOrz',
			one_value : 'WZQfRNqnu8XK97dp',
			two_value : 'iDsEy6bJLUeN7WSh',
			few_value : 'kqUe2gXCr7B04xEV',
			many_value : 'XKc7ks2T6RAQrCZJ',
			other_value : 'MqGys1Yw6n8VRDW7',
		),
		$client->langPackStringDeleted(
			key : 'Dre5QtfZcsoqiTk3',
		),
	),
);
```