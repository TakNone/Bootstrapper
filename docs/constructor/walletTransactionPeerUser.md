# walletTransactionPeerUser

**Layer** : 233

```tl
walletTransactionPeerUser#d4ea706d flags:# user_id:long address:string domain:flags.0?string = WalletTransactionPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | NOTHING |
| <mark>address</mark> | [`string`](type/string) | NOTHING |
| **domain** | [`flags.0?string`](type/string) | NOTHING |

---

## Type

[WalletTransactionPeer](type/WalletTransactionPeer)

---

## Example

```php
$walletTransactionPeer = $client->walletTransactionPeerUser(
	user_id : 3184760421124250011,
	address : 'v1MCi0k4pG5bXYlF',
	domain : 'iNYuOzfLCjy4wWFc',
);
```