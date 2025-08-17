# messageActionStarGiftUnique

**Layer** : 211

```tl
messageActionStarGiftUnique#34f762f3 flags:# upgrade:flags.0?true transferred:flags.1?true saved:flags.2?true refunded:flags.5?true gift:StarGift can_export_at:flags.3?int transfer_stars:flags.4?long from_id:flags.6?Peer peer:flags.7?Peer saved_id:flags.7?long resale_amount:flags.8?StarsAmount can_transfer_at:flags.9?int can_resell_at:flags.10?int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **upgrade** | [`flags.0?true`](type/true) | NOTHING |
| **transferred** | [`flags.1?true`](type/true) | NOTHING |
| **saved** | [`flags.2?true`](type/true) | NOTHING |
| **refunded** | [`flags.5?true`](type/true) | NOTHING |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | NOTHING |
| **can_export_at** | [`flags.3?int`](type/int) | NOTHING |
| **transfer_stars** | [`flags.4?long`](type/long) | NOTHING |
| **from_id** | [`flags.6?Peer`](type/Peer) | NOTHING |
| **peer** | [`flags.7?Peer`](type/Peer) | NOTHING |
| **saved_id** | [`flags.7?long`](type/long) | NOTHING |
| **resale_amount** | [`flags.8?StarsAmount`](type/StarsAmount) | NOTHING |
| **can_transfer_at** | [`flags.9?int`](type/int) | NOTHING |
| **can_resell_at** | [`flags.10?int`](type/int) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionStarGiftUnique(
	upgrade : true,
	transferred : true,
	saved : true,
	refunded : true,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		id : 3948172986392707065,
		sticker : $client->documentEmpty(
			id : -6488154797482403788,
		),
		stars : 4959538522444976994,
		availability_remains : 94,
		availability_total : 30,
		availability_resale : -7301153776355916320,
		convert_stars : -3712346276312805939,
		first_sale_date : 34,
		last_sale_date : 10,
		upgrade_stars : -1091868822449412205,
		resell_min_stars : -7677380976405982809,
		title : 'bL9vkeu4aKfxE1Wr',
		released_by : $client->peerUser(
			user_id : 4741332329957280488,
		),
		per_user_total : 5,
		per_user_remains : 72,
	),
	can_export_at : 8,
	transfer_stars : -3792465489941477417,
	from_id : $client->peerUser(
		user_id : -99840432434544200,
	),
	peer : $client->peerUser(
		user_id : 447122253484634545,
	),
	saved_id : -8965626492555290795,
	resale_amount : $client->starsAmount(
		amount : -1316631365382198206,
		nanos : 35,
	),
	can_transfer_at : 49,
	can_resell_at : 5,
);
```