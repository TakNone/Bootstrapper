# updateLangPack

**Description** : *Language pack updated*

**Layer** : 222

```tl
updateLangPack#56022f4d difference:LangPackDifference = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>difference</mark> | [`LangPackDifference`](type/LangPackDifference) | Changed strings |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateLangPack(
	difference : $client->langPackDifference(
		lang_code : 'fHimIVRYxFo5nCPc',
		from_version : 40,
		version : 59,
		strings : array(
			$client->langPackString(
				key : '5GknaoS2OdDqXAZ9',
				value : 'tbpzufxjGKyovgA9',
			),
			$client->langPackStringPluralized(
				key : 'b0kHGScWs6aT7MBv',
				zero_value : 'DJkAG5gtoY43ln6v',
				one_value : 'FMUc3EZ9BjOihe0Q',
				two_value : 'mHpKZfzBoGUvyMPS',
				few_value : 'Z8Auz0PgNqkoYfe6',
				many_value : 'lCOvJwYKgm0dI5Hn',
				other_value : 'KTq0o1vVbHwDgL8B',
			),
			$client->langPackStringDeleted(
				key : 'qAHR14W8CPJZDvXm',
			),
		),
	),
);
```