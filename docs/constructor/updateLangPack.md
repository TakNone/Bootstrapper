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
		lang_code : 'mj9bzSBU8Gq6kMfP',
		from_version : 76,
		version : 16,
		strings : array(
			$client->langPackString(
				key : 'NxGYTWLuSmz3MIQ6',
				value : 'OfE9eRQm3gXk4UIn',
			),
			$client->langPackStringPluralized(
				key : 'gLKsVRjAu0k3Hrd9',
				zero_value : 'u3EzcZnR8MWVj4m5',
				one_value : 'VUhp4ymqFukeKni6',
				two_value : '7anNDw4U5BdoJ6X8',
				few_value : '54h19dxCfqNeO0S2',
				many_value : 'T2wgFEX7HuDekAGV',
				other_value : 'hXIFUE8kSNWMceOi',
			),
			$client->langPackStringDeleted(
				key : '9t81H7sKGvpUwEk0',
			),
		),
	),
);
```