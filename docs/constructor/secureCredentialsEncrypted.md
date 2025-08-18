# secureCredentialsEncrypted

**Description** : *Encrypted credentials required to decrypt telegram passport data*

**Layer** : 211

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
	data : '?U?gLiveProto?h0?1',
	hash : '?*0?LiveProto???2h',
	secret : 'K:@u?LiveProto?A۔?',
);
```