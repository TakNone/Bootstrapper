# updateLangPack

**Description** : *Language pack updated*

**Layer** : 229

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
		lang_code : '45Okc9SJq8bgzAXj',
		from_version : 50,
		version : 64,
		strings : array(
			$client->langPackString(
				key : 'M1FmVROSiKJnpaYQ',
				value : 'Inz8FLfwRkTQ0WVu',
			),
			$client->langPackStringPluralized(
				key : 'JmvdMuApblHZa4eO',
				zero_value : 'OyuYRUg5aIDdxiT8',
				one_value : 'wGKj4TQbDm8aeXpW',
				two_value : '2DfIrVgBqTFK31vM',
				few_value : 'Gv94JdHz3VSi7YlW',
				many_value : 'JqAUSXH2CL8f4F3Q',
				other_value : 'q3PagAbnpSKsGJ4F',
			),
			$client->langPackStringDeleted(
				key : 'VOJBHZkUmT0EvM3Q',
			),
		),
	),
);
```