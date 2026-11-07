# langPackDifference

**Description** : *Changes to the app&#039;s localization pack*

**Layer** : 229

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
	lang_code : 'JFiDw9ohsNA1bL0z',
	from_version : 44,
	version : 24,
	strings : array(
		$client->langPackString(
			key : 'wCAE0oMPy4Xj9sdn',
			value : '2OjmJiyQFxPfA0Gv',
		),
		$client->langPackStringPluralized(
			key : 'wWCZseklnTNbvgQm',
			zero_value : '7I2HqXPjDwOSLGad',
			one_value : 'Ga19jXdBN7qIVvLR',
			two_value : 'AbUdV1L5KOvn8XJw',
			few_value : '4RDMUETklpOA1Jeh',
			many_value : 'ty8D0bChAiWsl9r1',
			other_value : 'BcRyHe870QkdamZS',
		),
		$client->langPackStringDeleted(
			key : 'nA8F9Ua5qW6RxTtX',
		),
	),
);
```