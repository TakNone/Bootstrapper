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
		id : 3396858244671777063,
		sticker : $client->documentEmpty(
			id : -6072588089446710274,
		),
		stars : -5049260798970095233,
		availability_remains : 34,
		availability_total : 7,
		availability_resale : 867206827033763042,
		convert_stars : -7793959616146067288,
		first_sale_date : 5,
		last_sale_date : 35,
		upgrade_stars : 2629870776497832062,
		resell_min_stars : 248454275195626045,
		title : 'g2h19TlX6eFyMrwV',
		released_by : $client->peerUser(
			user_id : -5727464141957591215,
		),
		per_user_total : 4,
		per_user_remains : 9,
	),
	can_export_at : 21,
	transfer_stars : -6617228408223824879,
	from_id : $client->peerUser(
		user_id : 5010408273177536152,
	),
	peer : $client->peerUser(
		user_id : -5534269295866448756,
	),
	saved_id : 2743684257304854558,
	resale_amount : $client->starsAmount(
		amount : 8027881965811570415,
		nanos : 41,
	),
	can_transfer_at : 68,
	can_resell_at : 68,
);
```