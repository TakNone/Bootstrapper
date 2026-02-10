# langPackDifference

**Description** : *Changes to the app&#039;s localization pack*

**Layer** : 222

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
	lang_code : 'OoHItFyk0CGMrZNq',
	from_version : 64,
	version : 98,
	strings : array(
		$client->langPackString(
			key : 'ZCl3qfkNt7Yb5hDJ',
			value : 'tr0i48bLHuYoUBNh',
		),
		$client->langPackStringPluralized(
			key : 'uKvIlbVEQyzam5P6',
			zero_value : 'GvlOQwUfZrB6FXCL',
			one_value : 'mtLD2FZ5AYs3Tiqu',
			two_value : 'A9McmZgq2fXtBuIR',
			few_value : 'iCpUJFSAj93WsdMG',
			many_value : 'bIdCYTRqAJFlf8xL',
			other_value : '0fbwBAqxgksEYynu',
		),
		$client->langPackStringDeleted(
			key : 'TZykoni0M4EPd1pG',
		),
	),
);
```