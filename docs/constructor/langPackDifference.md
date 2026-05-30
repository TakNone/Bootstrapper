# langPackDifference

**Description** : *Changes to the app&#039;s localization pack*

**Layer** : 225

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
	lang_code : '2zoreaSDX8s45xRu',
	from_version : 73,
	version : 15,
	strings : array(
		$client->langPackString(
			key : 'kIaBoUq5v2uQyJLW',
			value : 'SGwXWnTbs235fMix',
		),
		$client->langPackStringPluralized(
			key : 'lOt4wU5vCP37ZJVG',
			zero_value : 'nGgijdfr7VXW9Pvh',
			one_value : 'SBsZLTUQvbxJ5eNq',
			two_value : '82mqpbuaK6k9ozAG',
			few_value : 'fVeKStHTIQuyxR71',
			many_value : 'q1XkbnD5BPEW4ChJ',
			other_value : '32bxpGKCZ5eAOrjt',
		),
		$client->langPackStringDeleted(
			key : 'MDWarCY4zAKEQb38',
		),
	),
);
```