# securePasswordKdfAlgoSHA512

**Description** : *SHA512 KDF algo*

**Layer** : 211

```tl
securePasswordKdfAlgoSHA512#86471d92 salt:bytes = SecurePasswordKdfAlgo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>salt</mark> | [`bytes`](type/bytes) | Salt |

---

## Type

[SecurePasswordKdfAlgo](type/SecurePasswordKdfAlgo)

---

## Example

```php
$securePasswordKdfAlgo = $client->securePasswordKdfAlgoSHA512(
	salt : 'J8?0?LiveProto???ؤ',
);
```