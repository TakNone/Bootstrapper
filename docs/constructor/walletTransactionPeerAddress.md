# walletTransactionPeerAddress

**Layer** : 233

```tl
walletTransactionPeerAddress#62cc1bc flags:# address:string domain:flags.0?string = WalletTransactionPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>address</mark> | [`string`](type/string) | NOTHING |
| **domain** | [`flags.0?string`](type/string) | NOTHING |

---

## Type

[WalletTransactionPeer](type/WalletTransactionPeer)

---

## Example

```php
$walletTransactionPeer = $client->walletTransactionPeerAddress(
	address : 'jnL9gImBpAO1Nrua',
	domain : 'KS2hBHD5LgvanN8t',
);
```