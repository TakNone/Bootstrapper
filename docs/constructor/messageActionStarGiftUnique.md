# messageActionStarGiftUnique

**Description** : *A gift &raquo; was upgraded to a collectible gift &raquo;*

**Layer** : 233

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
		id : -2705979129624479457,
		sticker : $client->documentEmpty(
			id : -2669977460255946405,
		),
		stars : -610154346317827936,
		availability_remains : 97,
		availability_total : 10,
		availability_resale : -3540161950812545754,
		convert_stars : -7404705441099678887,
		first_sale_date : 52,
		last_sale_date : 6,
		upgrade_stars : -1247904365896508450,
		resell_min_stars : 7805572089709556008,
		title : 'jm1EbBgOU85zdPqS',
		released_by : $client->peerUser(
			user_id : -5448789100551369510,
		),
		per_user_total : 70,
		per_user_remains : 9,
		locked_until_date : 91,
		auction_slug : '0jakDxpqXCKvioMc',
		gifts_per_round : 14,
		auction_start_date : 68,
		upgrade_variants : 78,
		background : $client->starGiftBackground(
			center_color : 72,
			edge_color : 34,
			text_color : 75,
		),
	),
	can_export_at : 23,
	transfer_stars : 2762339309145442003,
	from_id : $client->peerUser(
		user_id : 4021714917959457444,
	),
	peer : $client->peerUser(
		user_id : -1185208513505822491,
	),
	saved_id : 5389400942685314215,
	resale_amount : $client->starsAmount(
		amount : -7000708518052783517,
		nanos : 42,
	),
	can_transfer_at : 70,
	can_resell_at : 32,
	drop_original_details_stars : -255870623799321540,
	can_craft_at : 46,
	message : $client->textWithEntities(
		text : 'urfFhejGO4N08RLK',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 67,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 30,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 58,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 43,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 13,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 93,
				language : 'BgNP689faspOZCkt',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 86,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 36,
				user_id : 7033112442419565699,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 47,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 78,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 63,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 32,
				document_id : 5811847715530640768,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 78,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 66,
				date : 43,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 79,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 9,
				old_text : 'b0ZgOmY5yDCGM1jL',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 40,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 5,
			),
		),
	),
);
```