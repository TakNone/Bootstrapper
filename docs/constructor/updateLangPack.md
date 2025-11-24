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
		lang_code : 'frIWU2ws45YdzP8p',
		from_version : 67,
		version : 56,
		strings : array(
			$client->langPackString(
				key : 'OJSLmD4Y8oVRCg0j',
				value : 'yLXpg1EcRC6k35qB',
			),
			$client->langPackStringPluralized(
				key : 'ZN56nCeaVkUAYrml',
				zero_value : 'cHD02yq6GCWjYluw',
				one_value : 'LxwR1yQekCG325Aj',
				two_value : 'ps52DXSanCexcfMP',
				few_value : 'iXY3DjcSw61gMyKW',
				many_value : 'XB8jCArp5vMYT3xu',
				other_value : 'HD8o3Lsfha5tQkyF',
			),
			$client->langPackStringDeleted(
				key : 'eGnsA5cgPDf2Mbz0',
			),
		),
	),
);
```