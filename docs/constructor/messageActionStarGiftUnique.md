# messageActionStarGiftUnique

**Layer** : 214

```tl
messageActionStarGiftUnique#34f762f3 flags:# upgrade:flags.0?true transferred:flags.1?true saved:flags.2?true refunded:flags.5?true prepaid_upgrade:flags.11?true gift:StarGift can_export_at:flags.3?int transfer_stars:flags.4?long from_id:flags.6?Peer peer:flags.7?Peer saved_id:flags.7?long resale_amount:flags.8?StarsAmount can_transfer_at:flags.9?int can_resell_at:flags.10?int = MessageAction;
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
| **prepaid_upgrade** | [`flags.11?true`](type/true) | NOTHING |
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
	prepaid_upgrade : true,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		id : 2781451302739842368,
		sticker : $client->documentEmpty(
			id : 5027962141936443228,
		),
		stars : 8330172639685608345,
		availability_remains : 32,
		availability_total : 11,
		availability_resale : 1589977556557825158,
		convert_stars : -7724135754396109365,
		first_sale_date : 44,
		last_sale_date : 52,
		upgrade_stars : -6549874883477208068,
		resell_min_stars : -3561882892808973862,
		title : '9Nh5wZT6JSy2PmuC',
		released_by : $client->peerUser(
			user_id : 919532057150454568,
		),
		per_user_total : 3,
		per_user_remains : 55,
		locked_until_date : 40,
	),
	can_export_at : 14,
	transfer_stars : -6518538619263776876,
	from_id : $client->peerUser(
		user_id : 1465978027216309621,
	),
	peer : $client->peerUser(
		user_id : 7641777450361643556,
	),
	saved_id : 2980184813899179772,
	resale_amount : $client->starsAmount(
		amount : -7855379845972983506,
		nanos : 10,
	),
	can_transfer_at : 66,
	can_resell_at : 63,
);
```