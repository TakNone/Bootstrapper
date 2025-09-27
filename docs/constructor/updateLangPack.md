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
		lang_code : 'YZDutvr2pQEUlazT',
		from_version : 25,
		version : 47,
		strings : array(
			$client->langPackString(
				key : '1o2wXRArfaqGKUMn',
				value : 'zL4oTQPRCGFNnWgt',
			),
			$client->langPackStringPluralized(
				key : 'WUALyi9djwYQet6b',
				zero_value : 'dO6J4wN7U8uBVFDG',
				one_value : '25j1zynatkvgGECH',
				two_value : 'kNvL4mjF8pyWxOIC',
				few_value : 'vPMLs3WOHu1n94w5',
				many_value : 'WJE7lqNSvb518eDt',
				other_value : 'M9T8IabXu7wijrLE',
			),
			$client->langPackStringDeleted(
				key : 'JFulVj4XiMGQdzaE',
			),
		),
	),
);
```