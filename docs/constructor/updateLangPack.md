# updateLangPack

**Description** : *Language pack updated*

**Layer** : 227

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
		lang_code : 'hbHvSBG81q0dIstJ',
		from_version : 81,
		version : 87,
		strings : array(
			$client->langPackString(
				key : 'YOfpiGAFe4CMDN68',
				value : 'tv26nX9MPS8rsLjE',
			),
			$client->langPackStringPluralized(
				key : '3NM69KmOxZX4lt2W',
				zero_value : 'IAmuNDFY5vokzeJc',
				one_value : 'PmSKQszxLclJuZdo',
				two_value : 'goOqzfxRWp9K65cM',
				few_value : 'B76qQwJWDFmz2gsN',
				many_value : 'X0kcRU6veErCsDuY',
				other_value : 'JDuagSVzE6ek8AmB',
			),
			$client->langPackStringDeleted(
				key : 'DHhXdme7Ak5Spcis',
			),
		),
	),
);
```