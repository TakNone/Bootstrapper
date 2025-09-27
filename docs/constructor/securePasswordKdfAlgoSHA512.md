# securePasswordKdfAlgoSHA512

**Description** : *SHA512 KDF algo*

**Layer** : 216

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
	salt : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```