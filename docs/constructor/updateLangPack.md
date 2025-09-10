# updateLangPack

**Description** : *Language pack updated*

**Layer** : 214

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
		lang_code : 'Wp8o3GJ9cHQYfE1z',
		from_version : 54,
		version : 78,
		strings : array(
			$client->langPackString(
				key : 'cVEODztrl8CaGSfU',
				value : 'o1HeXDh7qP96GMts',
			),
			$client->langPackStringPluralized(
				key : 'WavFbe4q2pJnrcts',
				zero_value : 'y8DBC0fpFSkP9Oj5',
				one_value : 'mz7puxQHGjWZbThk',
				two_value : 'LcuQAriqDFvyxsZ7',
				few_value : 'gnxAe43vUrOkV1qm',
				many_value : 'TD1dhq2mN6WZrMCF',
				other_value : '3ZTSoBHsnQt2dPCf',
			),
			$client->langPackStringDeleted(
				key : 'rcUSdZvkEo45PRYt',
			),
		),
	),
);
```