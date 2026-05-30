# payments.sendStarGiftOffer

**Layer** : 225

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
	slug : '1ge9tsIx8aLijz0h',
	price : $client->starsAmount(
		amount : -2111764084418206336,
		nanos : 50,
	),
	duration : 50,
	random_id : -741212571929212300,
	allow_paid_stars : 8830264404289495103,
);
```