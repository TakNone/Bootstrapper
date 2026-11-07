# inputWalletImported

**Layer** : 233

```tl
inputWalletImported#66a66a3b flags:# public_key:bytes anchor_public_key:flags.0?bytes proof:WalletOwnershipProof = InputWalletReplacement;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>public_key</mark> | [`bytes`](type/bytes) | NOTHING |
| **anchor_public_key** | [`flags.0?bytes`](type/bytes) | NOTHING |
| <mark>proof</mark> | [`WalletOwnershipProof`](type/WalletOwnershipProof) | NOTHING |

---

## Type

[InputWalletReplacement](type/InputWalletReplacement)

---

## Example

```php
$inputWalletReplacement = $client->inputWalletImported(
	public_key : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	anchor_public_key : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	proof : $client->walletOwnershipProof(
		timestamp : 67,
		signature : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
);
```