# wallet.fetchEncryptedSecretPhrasePart

**Layer** : 233

```tl
wallet.fetchEncryptedSecretPhrasePart#f53925cf token:string public_key:bytes = wallet.EncryptedSecretPhrasePart;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>token</mark> | [`string`](type/string) | NOTHING |
| <mark>public_key</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Result

[wallet.EncryptedSecretPhrasePart](type/wallet.EncryptedSecretPhrasePart)

---

## Example

```php
$walletEncryptedSecretPhrasePart = $client->wallet->fetchEncryptedSecretPhrasePart(
	token : 'UWb1QpKZTlP3eaO9',
	public_key : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```