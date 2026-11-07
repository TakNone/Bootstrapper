# wallet.enableBackup

**Layer** : 233

```tl
wallet.enableBackup#4500c525 flags:# parts:Vector<bytes> new_public_key:flags.1?bytes proof:flags.2?WalletOwnershipProof = WalletState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>parts</mark> | [`Vector<bytes>`](type/bytes) | NOTHING |
| **new_public_key** | [`flags.1?bytes`](type/bytes) | NOTHING |
| **proof** | [`flags.2?WalletOwnershipProof`](type/WalletOwnershipProof) | NOTHING |

---

## Result

[WalletState](type/WalletState)

---

## Example

```php
$walletState = $client->wallet->enableBackup(
	parts : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	new_public_key : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	proof : $client->walletOwnershipProof(
		timestamp : 64,
		signature : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
);
```