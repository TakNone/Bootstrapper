# updateLangPack

**Description** : *Language pack updated*

**Layer** : 218

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
		lang_code : 'fQXUoTHZOar5SNBP',
		from_version : 74,
		version : 11,
		strings : array(
			$client->langPackString(
				key : '4KYFSZwICco36Qmk',
				value : 'XPdnG8Ze1mv5LBYO',
			),
			$client->langPackStringPluralized(
				key : 'dyEsrmtUOIDMvHu1',
				zero_value : 'A9ExrjcyWvY76pRg',
				one_value : 'ntgoYNpPSaH68dZ7',
				two_value : 'p26zEFDnq3b9Y4L1',
				few_value : 'gFCRJXm5UVadi4Hr',
				many_value : 'gyoTuvOqGpH5wbi7',
				other_value : 'UZcIrbkFLJGdCW4Q',
			),
			$client->langPackStringDeleted(
				key : 'G74vV25LrRHwFJDU',
			),
		),
	),
);
```