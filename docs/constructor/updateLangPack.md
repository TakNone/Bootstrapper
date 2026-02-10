# updateLangPack

**Description** : *Language pack updated*

**Layer** : 222

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
		lang_code : 'NG0S1OlPHMIfBWiY',
		from_version : 66,
		version : 89,
		strings : array(
			$client->langPackString(
				key : 'mRE3g4vAPNZ710uU',
				value : 'F83179xHMwZCzfhK',
			),
			$client->langPackStringPluralized(
				key : 'XBwr7aVu20dPstvG',
				zero_value : '7Ya12O4QNp8u0Lc9',
				one_value : 'ork2lwx5Es167zJu',
				two_value : '3WmCxvjpkul1RQi7',
				few_value : 'c57QMIuUqSvE4ojJ',
				many_value : 'n63LobXZVjR9NUJa',
				other_value : '1mBgjFixXIQLk9ru',
			),
			$client->langPackStringDeleted(
				key : 'acLfRXhvSNPgW0s8',
			),
		),
	),
);
```