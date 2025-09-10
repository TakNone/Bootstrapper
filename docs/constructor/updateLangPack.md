# updateLangPack

**Layer** : 214

```tl
updateLangPack#56022f4d difference:LangPackDifference = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>difference</mark> | [`LangPackDifference`](type/LangPackDifference) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateLangPack(
	difference : $client->langPackDifference(
		lang_code : 'WVCmbZ6kvnx3a0rD',
		from_version : 36,
		version : 70,
		strings : array(
			$client->langPackString(
				key : 'ndKrh56alzZM0O14',
				value : 'VoHNwIL7nxMWteTY',
			),
			$client->langPackStringPluralized(
				key : 'TqnvA5sI9o2tHFfZ',
				zero_value : 'ulRd6Z13iVvLJyPe',
				one_value : 'SqfipmQuF9WrOHvX',
				two_value : '72Gy5gUSMxIzipr8',
				few_value : 'PQBgchetz0Slov6T',
				many_value : 'Y1WUl5nsJuRHZjzB',
				other_value : '6WIcJ3u2ayivtzXf',
			),
			$client->langPackStringDeleted(
				key : '3KbPiwmU2T6x8dMq',
			),
		),
	),
);
```