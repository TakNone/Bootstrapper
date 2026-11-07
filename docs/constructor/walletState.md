# walletState

**Layer** : 233

```tl
walletState#95c5346b flags:# backup_enabled:flags.0?true can_export_phrase:flags.1?true can_enable_backup:flags.2?true address:string public_key:bytes balance:long = WalletState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **backup_enabled** | [`flags.0?true`](type/true) | NOTHING |
| **can_export_phrase** | [`flags.1?true`](type/true) | NOTHING |
| **can_enable_backup** | [`flags.2?true`](type/true) | NOTHING |
| <mark>address</mark> | [`string`](type/string) | NOTHING |
| <mark>public_key</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>balance</mark> | [`long`](type/long) | NOTHING |

---

## Type

[WalletState](type/WalletState)

---

## Example

```php
$walletState = $client->walletState(
	backup_enabled : true,
	can_export_phrase : true,
	can_enable_backup : true,
	address : 'EaQPVYSu0xh9fZG1',
	public_key : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	balance : -1327594843475528341,
);
```