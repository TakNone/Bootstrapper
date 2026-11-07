# wallet.nftAttribute

**Layer** : 233

```tl
wallet.nftAttribute#4c1ef10e trait_type:string value:string = wallet.NftAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>trait_type</mark> | [`string`](type/string) | NOTHING |
| <mark>value</mark> | [`string`](type/string) | NOTHING |

---

## Type

[wallet.NftAttribute](type/wallet.NftAttribute)

---

## Example

```php
$walletNftAttribute = $client->wallet->nftAttribute(
	trait_type : 'blfKVu63WnXJghTP',
	value : 'ilzTyYpVfF3ZWSIm',
);
```