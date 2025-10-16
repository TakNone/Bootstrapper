# messageActionStarGiftUnique

**Layer** : 216

```tl
messageActionStarGiftUnique#95728543 flags:# upgrade:flags.0?true transferred:flags.1?true saved:flags.2?true refunded:flags.5?true prepaid_upgrade:flags.11?true assigned:flags.13?true gift:StarGift can_export_at:flags.3?int transfer_stars:flags.4?long from_id:flags.6?Peer peer:flags.7?Peer saved_id:flags.7?long resale_amount:flags.8?StarsAmount can_transfer_at:flags.9?int can_resell_at:flags.10?int drop_original_details_stars:flags.12?long = MessageAction;
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
| **assigned** | [`flags.13?true`](type/true) | NOTHING |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | NOTHING |
| **can_export_at** | [`flags.3?int`](type/int) | NOTHING |
| **transfer_stars** | [`flags.4?long`](type/long) | NOTHING |
| **from_id** | [`flags.6?Peer`](type/Peer) | NOTHING |
| **peer** | [`flags.7?Peer`](type/Peer) | NOTHING |
| **saved_id** | [`flags.7?long`](type/long) | NOTHING |
| **resale_amount** | [`flags.8?StarsAmount`](type/StarsAmount) | NOTHING |
| **can_transfer_at** | [`flags.9?int`](type/int) | NOTHING |
| **can_resell_at** | [`flags.10?int`](type/int) | NOTHING |
| **drop_original_details_stars** | [`flags.12?long`](type/long) | NOTHING |

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
	assigned : true,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		id : 5996226652893326782,
		sticker : $client->documentEmpty(
			id : 6437294731618392211,
		),
		stars : -9212658003577873724,
		availability_remains : 66,
		availability_total : 13,
		availability_resale : 6111514524957135121,
		convert_stars : -5848152907781663332,
		first_sale_date : 89,
		last_sale_date : 48,
		upgrade_stars : 3573081301429043852,
		resell_min_stars : 7906391852046996133,
		title : 'ldgcxHhGIMj7XzK2',
		released_by : $client->peerUser(
			user_id : 4949663514859569572,
		),
		per_user_total : 51,
		per_user_remains : 32,
		locked_until_date : 18,
	),
	can_export_at : 19,
	transfer_stars : 2914115146402683592,
	from_id : $client->peerUser(
		user_id : -5267655783760990847,
	),
	peer : $client->peerUser(
		user_id : 833756734494617604,
	),
	saved_id : -8274210586292109554,
	resale_amount : $client->starsAmount(
		amount : -977164051915567176,
		nanos : 93,
	),
	can_transfer_at : 65,
	can_resell_at : 89,
	drop_original_details_stars : -8441898306627315301,
);
```