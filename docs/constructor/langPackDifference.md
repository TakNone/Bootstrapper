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
	lang_code : 'ax4bjSHdRAOLngBl',
	from_version : 20,
	version : 84,
	strings : array(
		$client->langPackString(
			key : 'IR9gJXrm8SL1jpWe',
			value : '03jMr2So5pAaGdiO',
		),
		$client->langPackStringPluralized(
			key : 'rT3Z9kc8d5RqfLFJ',
			zero_value : 'jxSzspJVkwg8u76H',
			one_value : 'UMnmut7HyQw1CSOb',
			two_value : 'FeVRAQhKwN1qDIET',
			few_value : 'RCTmtBiwrvDEeI3b',
			many_value : 'YTqG5vDSiZKlCtmP',
			other_value : 'hFe1Qk8OEsw9tNq3',
		),
		$client->langPackStringDeleted(
			key : 'M9YQJovenrElqjiZ',
		),
	),
);
```