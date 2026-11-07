# wallet.encryptedSecretPhrasePart

**Layer** : 233

```tl
wallet.encryptedSecretPhrasePart#18e82537 data:bytes = wallet.EncryptedSecretPhrasePart;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>data</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Type

[wallet.EncryptedSecretPhrasePart](type/wallet.EncryptedSecretPhrasePart)

---

## Example

```php
$walletEncryptedSecretPhrasePart = $client->wallet->encryptedSecretPhrasePart(
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```