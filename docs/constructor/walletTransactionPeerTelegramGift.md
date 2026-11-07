# walletTransactionPeerTelegramGift

**Layer** : 233

```tl
walletTransactionPeerTelegramGift#f4729499 flags:# own_profile:flags.0?true = WalletTransactionPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **own_profile** | [`flags.0?true`](type/true) | NOTHING |

---

## Type

[WalletTransactionPeer](type/WalletTransactionPeer)

---

## Example

```php
$walletTransactionPeer = $client->walletTransactionPeerTelegramGift(
	own_profile : true,
);
```