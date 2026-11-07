# wallet.holderDc

**Layer** : 233

```tl
wallet.holderDc#f9d612ef dc:int public_key:bytes = wallet.HolderDc;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dc</mark> | [`int`](type/int) | NOTHING |
| <mark>public_key</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Type

[wallet.HolderDc](type/wallet.HolderDc)

---

## Example

```php
$walletHolderDc = $client->wallet->holderDc(
	dc : 73,
	public_key : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```