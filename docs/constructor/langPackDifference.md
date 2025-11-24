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
	lang_code : 'LeBtaqoZRDznMhGx',
	from_version : 75,
	version : 96,
	strings : array(
		$client->langPackString(
			key : 'nkCv2wWa4yAGSrpI',
			value : 'HFKuybmRXlUM3cIo',
		),
		$client->langPackStringPluralized(
			key : 'ynatMGlR0OgHuI6V',
			zero_value : 'Kz7wPY56rSmluTFt',
			one_value : 'jZLODbxkRKyTA824',
			two_value : 'o2MaqGQXZzpg6VSc',
			few_value : 'ZnivpXuQwGsy0WFM',
			many_value : 'jm84W3E7LvFo9AHp',
			other_value : 'zRkrGs3g62OvjPyq',
		),
		$client->langPackStringDeleted(
			key : 'KMptYs8B7EVbCh5Z',
		),
	),
);
```