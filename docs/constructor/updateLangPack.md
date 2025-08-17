# updateLangPack

**Description** : *Language pack updated*

**Layer** : 211

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
		lang_code : 'YWKs679S3myAD0Fc',
		from_version : 65,
		version : 35,
		strings : array(
			$client->langPackString(
				key : 'G2U9ebXqRAT0IgMa',
				value : 'sn3DkfvVmja6PeZX',
			),
			$client->langPackStringPluralized(
				key : '72RMAGpceDFHdK8J',
				zero_value : 't2JmwWu5FasM0Ixh',
				one_value : 'UiJ0YfmurTbEsQSP',
				two_value : 'xRkn5lzv8GV6ea4B',
				few_value : 'MJgNSBr1mZ0uweoX',
				many_value : 'cb2lxPz7i6aXQU4D',
				other_value : 'sJSz1gmHcIxpn6oV',
			),
			$client->langPackStringDeleted(
				key : 'mFYgUI79baer3qT8',
			),
		),
	),
);
```