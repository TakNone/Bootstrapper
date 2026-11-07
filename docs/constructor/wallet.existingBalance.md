# wallet.existingBalance

**Layer** : 233

```tl
wallet.existingBalance#bde90a8d flags:# has_balance:flags.0?true url:string = wallet.ExistingBalance;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **has_balance** | [`flags.0?true`](type/true) | NOTHING |
| <mark>url</mark> | [`string`](type/string) | NOTHING |

---

## Type

[wallet.ExistingBalance](type/wallet.ExistingBalance)

---

## Example

```php
$walletExistingBalance = $client->wallet->existingBalance(
	has_balance : true,
	url : 'https://docs.liveproto.dev',
);
```