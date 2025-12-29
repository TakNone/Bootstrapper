# messageActionStarGiftUnique

**Description** : *A gift &raquo; was upgraded to a collectible gift &raquo;*

**Layer** : 218

```tl
messageActionStarGiftUnique#95728543 flags:# upgrade:flags.0?true transferred:flags.1?true saved:flags.2?true refunded:flags.5?true prepaid_upgrade:flags.11?true assigned:flags.13?true gift:StarGift can_export_at:flags.3?int transfer_stars:flags.4?long from_id:flags.6?Peer peer:flags.7?Peer saved_id:flags.7?long resale_amount:flags.8?StarsAmount can_transfer_at:flags.9?int can_resell_at:flags.10?int drop_original_details_stars:flags.12?long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **upgrade** | [`flags.0?true`](type/true) | If set, this collectible was upgraded » to a collectible gift from a previously received or sent (depending on the out flag of the containing messageService) non-collectible gift |
| **transferred** | [`flags.1?true`](type/true) | If set, this collectible was transferred (either to the current user or by the current user to the other user in the private chat, depending on the out flag of the containing messageService) |
| **saved** | [`flags.2?true`](type/true) | If set, this gift is visible on the user or channel's profile page; can only be set for the receiver of a gift |
| **refunded** | [`flags.5?true`](type/true) | This gift was upgraded to a collectible gift » and then re-downgraded to a regular gift because a request to refund the payment related to the upgrade was made, and the money was returned |
| **prepaid_upgrade** | [`flags.11?true`](type/true) | The sender has pre-paid for the upgrade of this gift to a collectible gift |
| **assigned** | [`flags.13?true`](type/true) | NOTHING |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | The collectible gift |
| **can_export_at** | [`flags.3?int`](type/int) | If set, indicates that the current gift can't be exported to the TON blockchain » yet: the owner will be able to export it at the specified unixtime |
| **transfer_stars** | [`flags.4?long`](type/long) | If set, indicates that the gift can be transferred » to another user by paying the specified amount of stars |
| **from_id** | [`flags.6?Peer`](type/Peer) | Sender of the gift (unset for anonymous gifts) |
| **peer** | [`flags.7?Peer`](type/Peer) | Receiver of the gift |
| **saved_id** | [`flags.7?long`](type/long) | For channel gifts, ID to use in inputSavedStarGiftChat constructors |
| **resale_amount** | [`flags.8?StarsAmount`](type/StarsAmount) | Resale price of the gift |
| **can_transfer_at** | [`flags.9?int`](type/int) | If set, indicates that the current gift can't be transferred » yet: the owner will be able to transfer it at the specified unixtime |
| **can_resell_at** | [`flags.10?int`](type/int) | If set, indicates that the current gift can't be resold » yet: the owner will be able to put it up for sale at the specified unixtime |
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
		auction : true,
		id : -4939874407602394021,
		sticker : $client->documentEmpty(
			id : 1939667915278943390,
		),
		stars : -7032601507669666577,
		availability_remains : 94,
		availability_total : 58,
		availability_resale : -2660786123199433368,
		convert_stars : -3351927527119550057,
		first_sale_date : 80,
		last_sale_date : 38,
		upgrade_stars : -2503200186799995382,
		resell_min_stars : -6933429253950087412,
		title : 'FRKDZxqPTO1owlIk',
		released_by : $client->peerUser(
			user_id : -3347685341312260963,
		),
		per_user_total : 33,
		per_user_remains : 75,
		locked_until_date : 22,
		auction_slug : 'zEYgp7b32ZlTMS06',
		gifts_per_round : 63,
	),
	can_export_at : 56,
	transfer_stars : 6928822832778977281,
	from_id : $client->peerUser(
		user_id : 1002413411154305936,
	),
	peer : $client->peerUser(
		user_id : 2556330946187676040,
	),
	saved_id : 4864680472932474762,
	resale_amount : $client->starsAmount(
		amount : -7057681380527114293,
		nanos : 38,
	),
	can_transfer_at : 50,
	can_resell_at : 52,
	drop_original_details_stars : 6945756266106040886,
);
```