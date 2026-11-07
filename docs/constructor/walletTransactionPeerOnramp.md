# walletTransactionPeerOnramp

**Layer** : 233

```tl
walletTransactionPeerOnramp#e595186e flags:# address:string domain:flags.0?string provider_name:string = WalletTransactionPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>address</mark> | [`string`](type/string) | NOTHING |
| **domain** | [`flags.0?string`](type/string) | NOTHING |
| <mark>provider_name</mark> | [`string`](type/string) | NOTHING |

---

## Type

[WalletTransactionPeer](type/WalletTransactionPeer)

---

## Example

```php
$walletTransactionPeer = $client->walletTransactionPeerOnramp(
	address : 'bxqBSYvgJCKQDVnL',
	domain : 'lRywtMNUgux83KhQ',
	provider_name : 'BbXE7fmjz4AlRIuL',
);
```