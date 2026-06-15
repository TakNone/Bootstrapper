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
	slug : 'iBdrxTjSAaZ4U0hK',
	price : $client->starsAmount(
		amount : -8732624773276519287,
		nanos : 48,
	),
	duration : 35,
	random_id : -4892998018158783007,
	allow_paid_stars : 6158651266202352973,
);
```