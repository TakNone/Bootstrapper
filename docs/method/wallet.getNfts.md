# wallet.getNfts

**Layer** : 233

```tl
wallet.getNfts#8c12f3a4 offset:string limit:int = wallet.NftItems;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`string`](type/string) | NOTHING |
| <mark>limit</mark> | [`int`](type/int) | NOTHING |

---

## Result

[wallet.NftItems](type/wallet.NftItems)

---

## Example

```php
$walletNftItems = $client->wallet->getNfts(
	offset : 'pK3YizrSE2tIBMAm',
	limit : 0,
);
```