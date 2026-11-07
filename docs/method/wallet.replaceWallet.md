# wallet.replaceWallet

**Layer** : 233

```tl
wallet.replaceWallet#d8c72eec flags:# wallet:InputWalletReplacement password:flags.0?InputCheckPasswordSRP = WalletState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>wallet</mark> | [`InputWalletReplacement`](type/InputWalletReplacement) | NOTHING |
| **password** | [`flags.0?InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | NOTHING |

---

## Result

[WalletState](type/WalletState)

---

## Example

```php
$walletState = $client->wallet->replaceWallet(
	wallet : $client->inputWalletNew(),
	password : $client->inputCheckPasswordEmpty(),
);
```