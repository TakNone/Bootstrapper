# secureCredentialsEncrypted

**Description** : *Encrypted credentials required to decrypt telegram passport data*

**Layer** : 216

```tl
secureCredentialsEncrypted#33f0ea47 data:bytes hash:bytes secret:bytes = SecureCredentialsEncrypted;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>data</mark> | [`bytes`](type/bytes) | Encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication, as described in decrypting data » |
| <mark>hash</mark> | [`bytes`](type/bytes) | Data hash for data authentication as described in decrypting data » |
| <mark>secret</mark> | [`bytes`](type/bytes) | Secret, encrypted with the bot's public RSA key, required for data decryption as described in decrypting data » |

---

## Type

[SecureCredentialsEncrypted](type/SecureCredentialsEncrypted)

---

## Example

```php
$secureCredentialsEncrypted = $client->secureCredentialsEncrypted(
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```