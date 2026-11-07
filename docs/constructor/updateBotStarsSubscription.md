# updateBotStarsSubscription

**Layer** : 233

```tl
updateBotStarsSubscription#6c0d8e23 flags:# canceled:flags.0?true payment_failed:flags.1?true restored:flags.2?true user_id:long payload:bytes qts:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **canceled** | [`flags.0?true`](type/true) | NOTHING |
| **payment_failed** | [`flags.1?true`](type/true) | NOTHING |
| **restored** | [`flags.2?true`](type/true) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | NOTHING |
| <mark>payload</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>qts</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotStarsSubscription(
	canceled : true,
	payment_failed : true,
	restored : true,
	user_id : 4410100119403440927,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	qts : 46,
);
```