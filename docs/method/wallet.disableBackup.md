# wallet.disableBackup

**Layer** : 233

```tl
wallet.disableBackup#b0bf0da flags:# password:flags.0?InputCheckPasswordSRP new_public_key:flags.1?bytes proof:flags.2?WalletOwnershipProof = WalletState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **password** | [`flags.0?InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | NOTHING |
| **new_public_key** | [`flags.1?bytes`](type/bytes) | NOTHING |
| **proof** | [`flags.2?WalletOwnershipProof`](type/WalletOwnershipProof) | NOTHING |

---

## Result

[WalletState](type/WalletState)

---

## Example

```php
$walletState = $client->wallet->disableBackup(
	password : $client->inputCheckPasswordEmpty(),
	new_public_key : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	proof : $client->walletOwnershipProof(
		timestamp : 97,
		signature : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
);
```