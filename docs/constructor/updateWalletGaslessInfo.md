# updateWalletGaslessInfo

**Layer** : 233

```tl
updateWalletGaslessInfo#a8ae1cac flags:# available:flags.0?true left:int reset_at:int min_amount:long relayer_address:string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **available** | [`flags.0?true`](type/true) | NOTHING |
| <mark>left</mark> | [`int`](type/int) | NOTHING |
| <mark>reset_at</mark> | [`int`](type/int) | NOTHING |
| <mark>min_amount</mark> | [`long`](type/long) | NOTHING |
| <mark>relayer_address</mark> | [`string`](type/string) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateWalletGaslessInfo(
	available : true,
	left : 79,
	reset_at : 95,
	min_amount : 1161725705364553282,
	relayer_address : '9fmyAuazX0Ro2qDw',
);
```