# savedStarGift

**Description** : *Represents a gift owned by a peer*

**Layer** : 229

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
| **drop_original_details_stars** | [`flags.18?long`](type/long) | If set, the starGiftAttributeOriginalDetails attribute of this gift may be removed by paying the specified amount of stars, see here » for the full flow |
| **gift_num** | [`flags.19?int`](type/int) | Collectible number assigned to the gift, if already known |
| **can_craft_at** | [`flags.20?int`](type/int) | If set, this gift can be used for crafting » only starting from the specified unixtime |

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
		user_id : -4075723771391330987,
	),
	date : 59,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -4955013278340733951,
		sticker : $client->documentEmpty(
			id : -2090122361294117672,
		),
		stars : -3828488570031097558,
		availability_remains : 79,
		availability_total : 97,
		availability_resale : 5541502168005488918,
		convert_stars : 7396417906614774377,
		first_sale_date : 62,
		last_sale_date : 14,
		upgrade_stars : 963097720466194355,
		resell_min_stars : -508424544538094167,
		title : '8jPYF3DlgZuAhcRt',
		released_by : $client->peerUser(
			user_id : 5806000704571490728,
		),
		per_user_total : 55,
		per_user_remains : 19,
		locked_until_date : 38,
		auction_slug : 'L6HRxeQYavUwnFiO',
		gifts_per_round : 10,
		auction_start_date : 80,
		upgrade_variants : 15,
		background : $client->starGiftBackground(
			center_color : 71,
			edge_color : 58,
			text_color : 71,
		),
	),
	message : $client->textWithEntities(
		text : 'C7v8hb3mU4KrxGJV',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 55,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 95,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 7,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 17,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 88,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 27,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 34,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 77,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 51,
				language : '5CTOufqXxKej7QgV',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 51,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 65,
				user_id : -6211746700083365677,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 44,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 82,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 1,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 61,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 83,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 44,
				document_id : -1462809059366212306,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 0,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 30,
				date : 84,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 92,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 81,
				old_text : 'LsdBPVoUpI5jc07z',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 44,
			),
		),
	),
	msg_id : 100,
	saved_id : -1892417648360015608,
	convert_stars : -6686246772104592080,
	upgrade_stars : 5399315180935996834,
	can_export_at : 32,
	transfer_stars : 9180406304295517556,
	can_transfer_at : 80,
	can_resell_at : 5,
	collection_id : array(1),
	prepaid_upgrade_hash : 'kBAUTaH30Z6gqVbo',
	drop_original_details_stars : 3139937443874493739,
	gift_num : 11,
	can_craft_at : 26,
);
```