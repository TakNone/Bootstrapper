# payments.sendStarGiftOffer

**Layer** : 227

```tl
payments.sendStarGiftOffer#8fb86b41 flags:# peer:InputPeer slug:string price:StarsAmount duration:int random_id:long allow_paid_stars:flags.0?long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>slug</mark> | [`string`](type/string) | NOTHING |
| <mark>price</mark> | [`StarsAmount`](type/StarsAmount) | NOTHING |
| <mark>duration</mark> | [`int`](type/int) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |
| **allow_paid_stars** | [`flags.0?long`](type/long) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->payments->sendStarGiftOffer(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	slug : 'MGnVPpxRUB1JSay7',
	price : $client->starsAmount(
		amount : 8621800313051585242,
		nanos : 34,
	),
	duration : 60,
	random_id : 5013615871235285956,
	allow_paid_stars : -4237757647030355103,
);
```