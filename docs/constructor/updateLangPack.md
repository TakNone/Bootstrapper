# updateLangPack

**Description** : *Language pack updated*

**Layer** : 216

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
		lang_code : '85o9MwHyKhfpPsua',
		from_version : 11,
		version : 91,
		strings : array(
			$client->langPackString(
				key : 'lc7BkmPaWFdhYU68',
				value : 'Cqy19Yhr2pXfdOF5',
			),
			$client->langPackStringPluralized(
				key : 'WySkpYTUJbfrZOF0',
				zero_value : 'fvCNOoc1WZd6wVzK',
				one_value : 'MSxBk6g7wLKYDZCG',
				two_value : 'S9j7NlEWuHpGig46',
				few_value : 'hvnQu7BWHZlMXSUT',
				many_value : 'iV5eJLzN3kOCyYgZ',
				other_value : 'ma42rA7ZXPwISEWi',
			),
			$client->langPackStringDeleted(
				key : 'Th8fp1LHOVDQNBxn',
			),
		),
	),
);
```