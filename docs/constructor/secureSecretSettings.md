# secureSecretSettings

**Description** : *Secure settings*

**Layer** : 211

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
	secure_secret : '6n??LiveProto????',
	secure_secret_id : 5705487572017349877,
);
```