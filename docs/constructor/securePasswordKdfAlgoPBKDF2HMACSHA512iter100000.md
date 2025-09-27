# securePasswordKdfAlgoPBKDF2HMACSHA512iter100000

**Description** : *PBKDF2 with SHA512 and 100000 iterations KDF algo*

**Layer** : 214

```tl
securePasswordKdfAlgoPBKDF2HMACSHA512iter100000#bbf2dda0 salt:bytes = SecurePasswordKdfAlgo;
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
$securePasswordKdfAlgo = $client->securePasswordKdfAlgoPBKDF2HMACSHA512iter100000(
	salt : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```