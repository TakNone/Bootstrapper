# walletUserAddress

**Layer** : 233

```tl
walletUserAddress#fe78eecc flags:# user_id:flags.0?long address:string public_key:bytes = WalletUserAddress;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **user_id** | [`flags.0?long`](type/long) | NOTHING |
| <mark>address</mark> | [`string`](type/string) | NOTHING |
| <mark>public_key</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Type

[WalletUserAddress](type/WalletUserAddress)

---

## Example

```php
$walletUserAddress = $client->walletUserAddress(
	user_id : -2591378466818789519,
	address : 'f0KjHRtpq4yLPC5l',
	public_key : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```