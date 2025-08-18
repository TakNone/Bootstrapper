# updateLangPack

**Description** : *Language pack updated*

**Layer** : 211

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
		lang_code : 'nYJM7afBN0EVilqG',
		from_version : 58,
		version : 31,
		strings : array(
			$client->langPackString(
				key : 'cEehXvKRd0CFantL',
				value : 't4NgZRy5f8BWMCVa',
			),
			$client->langPackStringPluralized(
				key : 'At9Dg5NxhQHui1sj',
				zero_value : '83DAgQNTcp9KRnYV',
				one_value : 'EXyaTt7rQqz2ZvOd',
				two_value : 'Q3yAUj4FdgRW1ZJS',
				few_value : 'vBmcDgXw2i5KpH8r',
				many_value : 'XzYypIvN1QmJEAj5',
				other_value : 'vf0mZOyYje9QclFb',
			),
			$client->langPackStringDeleted(
				key : '9CvXAkfWeBh87N0o',
			),
		),
	),
);
```