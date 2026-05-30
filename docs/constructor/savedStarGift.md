# savedStarGift

**Description** : *Represents a gift owned by a peer*

**Layer** : 225

```tl
savedStarGift#41df43fc flags:# name_hidden:flags.0?true unsaved:flags.5?true refunded:flags.9?true can_upgrade:flags.10?true pinned_to_top:flags.12?true upgrade_separate:flags.17?true from_id:flags.1?Peer date:int gift:StarGift message:flags.2?TextWithEntities msg_id:flags.3?int saved_id:flags.11?long convert_stars:flags.4?long upgrade_stars:flags.6?long can_export_at:flags.7?int transfer_stars:flags.8?long can_transfer_at:flags.13?int can_resell_at:flags.14?int collection_id:flags.15?Vector<int> prepaid_upgrade_hash:flags.16?string drop_original_details_stars:flags.18?long gift_num:flags.19?int can_craft_at:flags.20?int = SavedStarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **name_hidden** | [`flags.0?true`](type/true) | If set, the gift sender in from_id and the message are set only for the receiver of the gift |
| **unsaved** | [`flags.5?true`](type/true) | If set, the gift is not pinned on the user's profile |
| **refunded** | [`flags.9?true`](type/true) | This gift was upgraded to a collectible gift » and then re-downgraded to a regular gift because a request to refund the payment related to the upgrade was made, and the money was returned |
| **can_upgrade** | [`flags.10?true`](type/true) | Only set for non-collectible gifts, if they can be upgraded to a collectible gift » |
| **pinned_to_top** | [`flags.12?true`](type/true) | Whether this gift is pinned on top of the user's profile page |
| **upgrade_separate** | [`flags.17?true`](type/true) | If set, someone already separately pre-paid for the upgrade of this gift |
| **from_id** | [`flags.1?Peer`](type/Peer) | Sender of the gift (unset for anonymous gifts) |
| <mark>date</mark> | [`int`](type/int) | Reception date of the gift |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | The collectible gift |
| **message** | [`flags.2?TextWithEntities`](type/TextWithEntities) | Message attached to the gift |
| **msg_id** | [`flags.3?int`](type/int) | For gifts received by users, ID to use in inputSavedStarGiftUser constructors |
| **saved_id** | [`flags.11?long`](type/long) | For gifts received by channels, ID to use in inputSavedStarGiftChat constructors |
| **convert_stars** | [`flags.4?long`](type/long) | For non-collectible gifts, the receiver of this gift may convert it to this many Telegram Stars, instead of displaying it on their profile page |
| **upgrade_stars** | [`flags.6?long`](type/long) | Only for pre-paid non-collectible gifts, the number of Telegram Stars the sender has already paid to convert the gift into a collectible gift » (this is different from the meaning of the flag in messageActionStarGift, where it signals the upgrade price for not yet upgraded gifts) |
| **can_export_at** | [`flags.7?int`](type/int) | If set, indicates that the current gift can't be exported to the TON blockchain » yet: the owner will be able to export it at the specified unixtime |
| **transfer_stars** | [`flags.8?long`](type/long) | If set, indicates that the gift can be transferred » to another user by paying the specified amount of stars |
| **can_transfer_at** | [`flags.13?int`](type/int) | If set, indicates that the current gift can't be transferred » yet: the owner will be able to transfer it at the specified unixtime |
| **can_resell_at** | [`flags.14?int`](type/int) | If set, indicates that the current gift can't be resold » yet: the owner will be able to put it up for sale at the specified unixtime |
| **collection_id** | [`flags.15?Vector<int>`](type/int) | IDs of the collections » that this gift is a part of |
| **prepaid_upgrade_hash** | [`flags.16?string`](type/string) | Hash to prepay for a gift upgrade separately » |
| **drop_original_details_stars** | [`flags.18?long`](type/long) | NOTHING |
| **gift_num** | [`flags.19?int`](type/int) | NOTHING |
| **can_craft_at** | [`flags.20?int`](type/int) | NOTHING |

---

## Type

[SavedStarGift](type/SavedStarGift)

---

## Example

```php
$savedStarGift = $client->savedStarGift(
	name_hidden : true,
	unsaved : true,
	refunded : true,
	can_upgrade : true,
	pinned_to_top : true,
	upgrade_separate : true,
	from_id : $client->peerUser(
		user_id : -3859711330978849547,
	),
	date : 79,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 4106928358276773277,
		sticker : $client->documentEmpty(
			id : -3543674009282197607,
		),
		stars : -4880787201314199346,
		availability_remains : 84,
		availability_total : 10,
		availability_resale : -8430041727117976261,
		convert_stars : -1981406918520964134,
		first_sale_date : 83,
		last_sale_date : 57,
		upgrade_stars : -7714459745450845481,
		resell_min_stars : 3609414661614221263,
		title : 'JrkWgHzOv6ARNp2M',
		released_by : $client->peerUser(
			user_id : -4770446149155750863,
		),
		per_user_total : 93,
		per_user_remains : 40,
		locked_until_date : 0,
		auction_slug : 'HiyNSWMuZpY6zw42',
		gifts_per_round : 41,
		auction_start_date : 59,
		upgrade_variants : 63,
		background : $client->starGiftBackground(
			center_color : 12,
			edge_color : 13,
			text_color : 83,
		),
	),
	message : $client->textWithEntities(
		text : '4uUJQXt9aDpPl3hB',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 96,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 35,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 84,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 64,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 10,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 67,
				language : 'rpWfDzuSHLmFqecP',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 62,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 42,
				user_id : 382898518861045384,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 31,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 24,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 48,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 30,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 93,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 84,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 81,
				document_id : -7684739118224730321,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 86,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 13,
				date : 48,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 64,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 82,
				old_text : 'rC8QPOI0iHS24DY1',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 18,
			),
		),
	),
	msg_id : 54,
	saved_id : 4712459060836131896,
	convert_stars : -5865657622196260473,
	upgrade_stars : 6809194408594186030,
	can_export_at : 13,
	transfer_stars : -7748302835741188729,
	can_transfer_at : 56,
	can_resell_at : 50,
	collection_id : array(9),
	prepaid_upgrade_hash : 'wmRMIfJTvejqKO89',
	drop_original_details_stars : -4632126267352265519,
	gift_num : 33,
	can_craft_at : 31,
);
```