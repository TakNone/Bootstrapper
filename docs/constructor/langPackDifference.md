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
	lang_code : 'T7WBi9gd6xELGqyF',
	from_version : 8,
	version : 82,
	strings : array(
		$client->langPackString(
			key : 'UsWb3u2hjfoZFi9O',
			value : 'AN7YEWLlQeCHrTPG',
		),
		$client->langPackStringPluralized(
			key : 'o6JAdnwpQ1WH7cqt',
			zero_value : 'lzLuX42G96mpg7nA',
			one_value : 'A6pd3MNJTnSZ5Luk',
			two_value : 'Ztg4uJmR5O37ckb1',
			few_value : 'wHTMiopJ3OGRSFt5',
			many_value : 'jWGm5qY46fIyQlxc',
			other_value : '0od5HAEkDqtFeTlJ',
		),
		$client->langPackStringDeleted(
			key : 'i2uL4bzrCokecHyl',
		),
	),
);
```