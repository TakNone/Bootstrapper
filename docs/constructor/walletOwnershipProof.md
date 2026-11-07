# walletOwnershipProof

**Layer** : 233

```tl
walletOwnershipProof#60bccb0d timestamp:int signature:bytes = WalletOwnershipProof;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>timestamp</mark> | [`int`](type/int) | NOTHING |
| <mark>signature</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Type

[WalletOwnershipProof](type/WalletOwnershipProof)

---

## Example

```php
$walletOwnershipProof = $client->walletOwnershipProof(
	timestamp : 30,
	signature : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```