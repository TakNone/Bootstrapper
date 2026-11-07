# messageActionStarGiftUnique

**Description** : *A gift &raquo; was upgraded to a collectible gift &raquo;*

**Layer** : 229

```tl
messageActionStarGiftUnique#7e1c1187 flags:# upgrade:flags.0?true transferred:flags.1?true saved:flags.2?true refunded:flags.5?true prepaid_upgrade:flags.11?true assigned:flags.13?true from_offer:flags.14?true craft:flags.16?true name_hidden:flags.17?true gift:StarGift can_export_at:flags.3?int transfer_stars:flags.4?long from_id:flags.6?Peer peer:flags.7?Peer saved_id:flags.7?long resale_amount:flags.8?StarsAmount can_transfer_at:flags.9?int can_resell_at:flags.10?int drop_original_details_stars:flags.12?long can_craft_at:flags.15?int message:flags.18?TextWithEntities = MessageAction;
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
| **assigned** | [`flags.13?true`](type/true) | This collectible gift was linked from the TON blockchain to a Telegram profile » |
| **from_offer** | [`flags.14?true`](type/true) | This collectible gift was transferred after a purchase offer » was accepted |
| **craft** | [`flags.16?true`](type/true) | This collectible gift was obtained by crafting » |
| **name_hidden** | [`flags.17?true`](type/true) | NOTHING |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | The collectible gift |
| **can_export_at** | [`flags.3?int`](type/int) | If set, indicates that the current gift can't be exported to the TON blockchain » yet: the owner will be able to export it at the specified unixtime |
| **transfer_stars** | [`flags.4?long`](type/long) | If set, indicates that the gift can be transferred » to another user by paying the specified amount of stars |
| **from_id** | [`flags.6?Peer`](type/Peer) | Sender of the gift (unset for anonymous gifts) |
| **peer** | [`flags.7?Peer`](type/Peer) | Receiver of the gift |
| **saved_id** | [`flags.7?long`](type/long) | For channel gifts, ID to use in inputSavedStarGiftChat constructors |
| **resale_amount** | [`flags.8?StarsAmount`](type/StarsAmount) | Resale price of the gift |
| **can_transfer_at** | [`flags.9?int`](type/int) | If set, indicates that the current gift can't be transferred » yet: the owner will be able to transfer it at the specified unixtime |
| **can_resell_at** | [`flags.10?int`](type/int) | If set, indicates that the current gift can't be resold » yet: the owner will be able to put it up for sale at the specified unixtime |
| **drop_original_details_stars** | [`flags.12?long`](type/long) | If set, the starGiftAttributeOriginalDetails attribute of this gift may be removed by paying the specified amount of stars, see here » for the full flow |
| **can_craft_at** | [`flags.15?int`](type/int) | If set, this gift can be used for crafting » only starting from the specified unixtime |
| **message** | [`flags.18?TextWithEntities`](type/TextWithEntities) | NOTHING |

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
	name_hidden : true,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 7483656141306445765,
		sticker : $client->documentEmpty(
			id : 6120279397196540834,
		),
		stars : 5772220282812962664,
		availability_remains : 28,
		availability_total : 62,
		availability_resale : -6892587403194772741,
		convert_stars : -8758040847864497753,
		first_sale_date : 57,
		last_sale_date : 17,
		upgrade_stars : 1961869576448014865,
		resell_min_stars : -3794576769697915522,
		title : 'RfeO5DCG6L4IWz1P',
		released_by : $client->peerUser(
			user_id : -8222225187066582708,
		),
		per_user_total : 47,
		per_user_remains : 64,
		locked_until_date : 69,
		auction_slug : '5AtRcoQPKbyZjFah',
		gifts_per_round : 69,
		auction_start_date : 23,
		upgrade_variants : 63,
		background : $client->starGiftBackground(
			center_color : 86,
			edge_color : 65,
			text_color : 38,
		),
	),
	can_export_at : 83,
	transfer_stars : -6317004864225794678,
	from_id : $client->peerUser(
		user_id : -6448661966517620097,
	),
	peer : $client->peerUser(
		user_id : -4777185867964846130,
	),
	saved_id : -74286705368507229,
	resale_amount : $client->starsAmount(
		amount : -7543050785982677738,
		nanos : 7,
	),
	can_transfer_at : 24,
	can_resell_at : 46,
	drop_original_details_stars : 8465608946020581009,
	can_craft_at : 81,
	message : $client->textWithEntities(
		text : 'jeO4BWVYIsPgzFiE',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 75,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 100,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 67,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 19,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 24,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 61,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 87,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 63,
				language : 'in70zK1XjQgqvEtS',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 10,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 41,
				user_id : -1451180444526519432,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 18,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 86,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 85,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 80,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 27,
				document_id : 2761805183771391968,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 19,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 20,
				date : 14,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 59,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 13,
				old_text : 'kIn6UO5fPMc2RFNm',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 31,
			),
		),
	),
);
```