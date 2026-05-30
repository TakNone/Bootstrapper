# langPackDifference

**Description** : *Changes to the app&#039;s localization pack*

**Layer** : 222

```tl
langPackDifference#f385c1f6 lang_code:string from_version:int version:int strings:Vector<LangPackString> = LangPackDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_code</mark> | [`string`](type/string) | Language code |
| <mark>from_version</mark> | [`int`](type/int) | Previous version number |
| <mark>version</mark> | [`int`](type/int) | New version number |
| <mark>strings</mark> | [`Vector<LangPackString>`](type/LangPackString) | Localized strings |

---

## Type

[LangPackDifference](type/LangPackDifference)

---

## Example

```php
$langPackDifference = $client->langPackDifference(
	lang_code : 'gyWmXwQHOANMc0qD',
	from_version : 48,
	version : 63,
	strings : array(
		$client->langPackString(
			key : 'kxOV1gKtW7JMuBsN',
			value : '3yIousKzfdAR1GcZ',
		),
		$client->langPackStringPluralized(
			key : '8PSsH6dvAep3Vbi9',
			zero_value : 'd5r7nhcDSjGBkzIX',
			one_value : 'BLIQPZ2EXOa8k9Yx',
			two_value : '8Ng2kx0otvhjiSK1',
			few_value : 'ZFMnTr0kcphAXKqV',
			many_value : 'Qa4sLkTGIlHuwXv0',
			other_value : '3QNUqf2uCBOIn7vc',
		),
		$client->langPackStringDeleted(
			key : 'VhbZEe7Frf503t16',
		),
	),
);
```