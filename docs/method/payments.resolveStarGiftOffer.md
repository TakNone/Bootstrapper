# payments.resolveStarGiftOffer

**Layer** : 227

```tl
payments.resolveStarGiftOffer#e9ce781c flags:# decline:flags.0?true offer_msg_id:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **decline** | [`flags.0?true`](type/true) | NOTHING |
| <mark>offer_msg_id</mark> | [`int`](type/int) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->payments->resolveStarGiftOffer(
	decline : true,
	offer_msg_id : 32,
);
```