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
		lang_code : 'mYsvtQxjOrA1CZ7e',
		from_version : 2,
		version : 67,
		strings : array(
			$client->langPackString(
				key : 'lgsRw9iEuCrMJac6',
				value : 'WJYHlysIMEcvN7xO',
			),
			$client->langPackStringPluralized(
				key : 'SuiQrylTwj5tNome',
				zero_value : 'aOITPiCcLl56Qb0e',
				one_value : 'FSyluYEthMP7B0ND',
				two_value : 'iLtJMUE0pA5B91Qv',
				few_value : 'Z84vBc7UKQzRtfbg',
				many_value : 'KDkJ2HXNpfOj70dT',
				other_value : 'Bb5xLv2wNHgDn6fo',
			),
			$client->langPackStringDeleted(
				key : '50qQR3JdYyircAK7',
			),
		),
	),
);
```