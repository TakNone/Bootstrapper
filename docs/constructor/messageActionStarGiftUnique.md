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
		id : -1220918144547156915,
		sticker : $client->documentEmpty(
			id : -5805211460334737072,
		),
		stars : -2837586122355771145,
		availability_remains : 64,
		availability_total : 76,
		availability_resale : -1067509461884247930,
		convert_stars : -5824482431965783742,
		first_sale_date : 61,
		last_sale_date : 77,
		upgrade_stars : -5824940690078870460,
		resell_min_stars : 3182450566148629837,
		title : '3rWK9VA5XxFGseRh',
		released_by : $client->peerUser(
			user_id : 5240945392590068361,
		),
		per_user_total : 87,
		per_user_remains : 65,
		locked_until_date : 16,
	),
	can_export_at : 47,
	transfer_stars : -4449709760554047210,
	from_id : $client->peerUser(
		user_id : 8910542387504258989,
	),
	peer : $client->peerUser(
		user_id : -4565966982010282676,
	),
	saved_id : -4956980103170121059,
	resale_amount : $client->starsAmount(
		amount : -339451978566570736,
		nanos : 22,
	),
	can_transfer_at : 23,
	can_resell_at : 28,
);
```