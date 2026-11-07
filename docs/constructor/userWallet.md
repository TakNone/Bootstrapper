# userWallet

**Layer** : 233

```tl
userWallet#454d2737 flags:# address:string balance:long public_key:flags.0?bytes state_init:flags.0?bytes = UserWallet;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>address</mark> | [`string`](type/string) | NOTHING |
| <mark>balance</mark> | [`long`](type/long) | NOTHING |
| **public_key** | [`flags.0?bytes`](type/bytes) | NOTHING |
| **state_init** | [`flags.0?bytes`](type/bytes) | NOTHING |

---

## Type

[UserWallet](type/UserWallet)

---

## Example

```php
$userWallet = $client->userWallet(
	address : '5MuhTU8HqPIQkZra',
	balance : -6715350639001907318,
	public_key : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	state_init : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```