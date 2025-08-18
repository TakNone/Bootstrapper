# langPackDifference

**Description** : *Changes to the app&#039;s localization pack*

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
	lang_code : 'OV4P1G5jiMCBwkHL',
	from_version : 33,
	version : 19,
	strings : array(
		$client->langPackString(
			key : '5fQuTM3KhD4vPVRa',
			value : 'BhdiM6Pqvs9n8cY1',
		),
		$client->langPackStringPluralized(
			key : '4akGuYW0DpnxgP5U',
			zero_value : 'iQOxdgmKupan8Y0J',
			one_value : 'mREuLb64MOelvH7I',
			two_value : '9EKIRyiZuGB1F47L',
			few_value : '3x8FqBpoumsZ5cfM',
			many_value : 'qODuNHWPxt0538BQ',
			other_value : 'qa6FfkjH3DJYvpTz',
		),
		$client->langPackStringDeleted(
			key : 'jlYGiwS1EWAgTkvX',
		),
	),
);
```