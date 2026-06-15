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
	lang_code : 'ptdFRVMYLce4i76O',
	from_version : 18,
	version : 73,
	strings : array(
		$client->langPackString(
			key : 'oVSw2WusLnTfMCF1',
			value : 'B2TzZfvq5FHY1VRS',
		),
		$client->langPackStringPluralized(
			key : 'JucOTVrB0ixRKyba',
			zero_value : 'ydq0fYhbk8OEliUF',
			one_value : 'IX4NSQJk1hfs9Vla',
			two_value : 'RgewIkcvX3y1jWC0',
			few_value : 'eftOB97Hc4UZ5DKv',
			many_value : 'FYsgwjt2AJobPHWC',
			other_value : 'uFmJzd4NxO5Z8HWw',
		),
		$client->langPackStringDeleted(
			key : 'bA7dXZcnvQtCI0ST',
		),
	),
);
```