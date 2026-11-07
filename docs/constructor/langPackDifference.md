# langPackDifference

**Description** : *Changes to the app&#039;s localization pack*

**Layer** : 233

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
	lang_code : 'TCr40lHFZ6k8PfVE',
	from_version : 71,
	version : 66,
	strings : array(
		$client->langPackString(
			key : 'MlAqbUs6Q4iNIOao',
			value : 'RaG7QlUkjcdfyrvO',
		),
		$client->langPackStringPluralized(
			key : 'Pv5Qr6xGHR9Lp1sM',
			zero_value : 'cosQnVaEZ9uWFilx',
			one_value : 'nOuPw3QAyY6Fbpah',
			two_value : 'zX4xn7QT9lYMmrwp',
			few_value : '5GsiwJtApbXNMU8j',
			many_value : '6Poe8xFgancXMb9l',
			other_value : 'wUsfi3IMRQVg0yCh',
		),
		$client->langPackStringDeleted(
			key : 'adCb2yRkoteUIsn6',
		),
	),
);
```