# messageActionStarGiftUnique

**Description** : *A gift &raquo; was upgraded to a collectible gift &raquo;*

**Layer** : 222

```tl
messageActionStarGiftUnique#e6c31522 flags:# upgrade:flags.0?true transferred:flags.1?true saved:flags.2?true refunded:flags.5?true prepaid_upgrade:flags.11?true assigned:flags.13?true from_offer:flags.14?true craft:flags.16?true gift:StarGift can_export_at:flags.3?int transfer_stars:flags.4?long from_id:flags.6?Peer peer:flags.7?Peer saved_id:flags.7?long resale_amount:flags.8?StarsAmount can_transfer_at:flags.9?int can_resell_at:flags.10?int drop_original_details_stars:flags.12?long can_craft_at:flags.15?int = MessageAction;
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
| **from_offer** | [`flags.14?true`](type/true) | NOTHING |
| **craft** | [`flags.16?true`](type/true) | NOTHING |
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
| **can_craft_at** | [`flags.15?int`](type/int) | NOTHING |

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
	from_offer : true,
	craft : true,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -7441137297186136577,
		sticker : $client->documentEmpty(
			id : -8274132906270206950,
		),
		stars : 4015185272037711089,
		availability_remains : 2,
		availability_total : 82,
		availability_resale : 4466891888230896429,
		convert_stars : 978340258231579098,
		first_sale_date : 47,
		last_sale_date : 89,
		upgrade_stars : 2618943735312250949,
		resell_min_stars : -284994315434638625,
		title : 'XflSWtZm2KJsEgjp',
		released_by : $client->peerUser(
			user_id : -4759630330403823314,
		),
		per_user_total : 2,
		per_user_remains : 56,
		locked_until_date : 87,
		auction_slug : 'mW8BHgnDGpjkK4Vt',
		gifts_per_round : 12,
		auction_start_date : 81,
		upgrade_variants : 3,
		background : $client->starGiftBackground(
			center_color : 0,
			edge_color : 43,
			text_color : 10,
		),
	),
	can_export_at : 79,
	transfer_stars : -831559805007076016,
	from_id : $client->peerUser(
		user_id : -2767210485127409016,
	),
	peer : $client->peerUser(
		user_id : 4458812086047664180,
	),
	saved_id : 4099961941449667999,
	resale_amount : $client->starsAmount(
		amount : -466810065456667382,
		nanos : 47,
	),
	can_transfer_at : 55,
	can_resell_at : 17,
	drop_original_details_stars : -1761810118208931485,
	can_craft_at : 65,
);
```