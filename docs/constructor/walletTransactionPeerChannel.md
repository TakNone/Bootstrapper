# walletTransactionPeerChannel

**Layer** : 233

```tl
walletTransactionPeerChannel#54e70c31 flags:# channel_id:long address:string domain:flags.0?string = WalletTransactionPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>channel_id</mark> | [`long`](type/long) | NOTHING |
| <mark>address</mark> | [`string`](type/string) | NOTHING |
| **domain** | [`flags.0?string`](type/string) | NOTHING |

---

## Type

[WalletTransactionPeer](type/WalletTransactionPeer)

---

## Example

```php
$walletTransactionPeer = $client->walletTransactionPeerChannel(
	channel_id : 2722392970291598591,
	address : 'vr76IWmVjK3ZRdaN',
	domain : 'NFHlKGbqVCMDt9Yz',
);
```