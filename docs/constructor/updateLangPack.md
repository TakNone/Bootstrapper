# updateLangPack

**Description** : *Language pack updated*

**Layer** : 225

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
		lang_code : 'QWzYjdKCyGoJVZcs',
		from_version : 84,
		version : 5,
		strings : array(
			$client->langPackString(
				key : 'RKjUkTmfaZvE8urJ',
				value : 'HKkIbTMospYuDPNf',
			),
			$client->langPackStringPluralized(
				key : 'hC73jwUdGtOnzrlM',
				zero_value : 'zTLByc3NMKUl9tPj',
				one_value : '5LXPupJF60IYcybN',
				two_value : '425lhOq8PbaJmBtH',
				few_value : 'LROTakMnmE0YWvsP',
				many_value : '8XYtu2apRZsyloIv',
				other_value : 'NwZsTmyfSLc1gKXj',
			),
			$client->langPackStringDeleted(
				key : '8IZtyLkMid6P4Aun',
			),
		),
	),
);
```