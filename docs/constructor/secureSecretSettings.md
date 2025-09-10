# secureSecretSettings

**Description** : *Secure settings*

**Layer** : 214

```tl
secureSecretSettings#1527bcac secure_algo:SecurePasswordKdfAlgo secure_secret:bytes secure_secret_id:long = SecureSecretSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>secure_algo</mark> | [`SecurePasswordKdfAlgo`](type/SecurePasswordKdfAlgo) | Secure KDF algo |
| <mark>secure_secret</mark> | [`bytes`](type/bytes) | Secure secret |
| <mark>secure_secret_id</mark> | [`long`](type/long) | Secret ID |

---

## Type

[SecureSecretSettings](type/SecureSecretSettings)

---

## Example

```php
$secureSecretSettings = $client->secureSecretSettings(
	secure_algo : $client->securePasswordKdfAlgoUnknown(),
	secure_secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	secure_secret_id : -7484281015163387090,
);
```