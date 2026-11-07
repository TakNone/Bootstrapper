# updateLangPack

**Description** : *Language pack updated*

**Layer** : 233

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
		lang_code : 'U6lZEb4He7MtrQPC',
		from_version : 10,
		version : 62,
		strings : array(
			$client->langPackString(
				key : 'buj1o7nORWrYEspL',
				value : 'Agk623nYxf1NaTMP',
			),
			$client->langPackStringPluralized(
				key : 'hfKcwW5DLmZM1kxo',
				zero_value : 'AFT5dbU1fzrL0R3x',
				one_value : 'jrNmO6ISJ2VkFGni',
				two_value : 'GQd57ntLxHPCi4pZ',
				few_value : 'JGM5lnHqELkKjX4u',
				many_value : 'cHQOwgGu8ysP2r1v',
				other_value : '46jamtRIflzdwMYS',
			),
			$client->langPackStringDeleted(
				key : 'hS5WXUYcfZM24nDH',
			),
		),
	),
);
```