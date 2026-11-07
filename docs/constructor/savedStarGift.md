# savedStarGift

**Description** : *Represents a gift owned by a peer*

**Layer** : 233

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
		user_id : -2367854058650062520,
	),
	date : 83,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -2520532085651010524,
		sticker : $client->documentEmpty(
			id : -8040143254049051619,
		),
		stars : -5186180856744761762,
		availability_remains : 50,
		availability_total : 79,
		availability_resale : 1234803745279185765,
		convert_stars : 8172319324150421042,
		first_sale_date : 49,
		last_sale_date : 51,
		upgrade_stars : -6056086995712536019,
		resell_min_stars : 7789864293945158333,
		title : 'd7S3Zx2EiqNOpaPy',
		released_by : $client->peerUser(
			user_id : -1050014678151220531,
		),
		per_user_total : 59,
		per_user_remains : 84,
		locked_until_date : 62,
		auction_slug : 'JWTERmadG4hMYkpf',
		gifts_per_round : 71,
		auction_start_date : 64,
		upgrade_variants : 71,
		background : $client->starGiftBackground(
			center_color : 18,
			edge_color : 37,
			text_color : 39,
		),
	),
	message : $client->textWithEntities(
		text : 'cQklAfZd49uROj83',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 50,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 85,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 53,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 88,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 97,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 78,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 71,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 67,
				language : 'UNclEkjh9SgLYaVB',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 86,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 72,
				user_id : 6186313126120828353,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 88,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 54,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 19,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 82,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 42,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 22,
				document_id : 7005997281717200044,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 43,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 96,
				date : 43,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 91,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 34,
				old_text : 'AyE9uQdr8KwbqjGe',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 60,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 16,
			),
		),
	),
	msg_id : 21,
	saved_id : -2065786738653118833,
	convert_stars : 7415846397823333132,
	upgrade_stars : 4299944119161136080,
	can_export_at : 1,
	transfer_stars : -7923236498850133511,
	can_transfer_at : 20,
	can_resell_at : 59,
	collection_id : array(6),
	prepaid_upgrade_hash : 'on2M0W4bj5OiFuLq',
	drop_original_details_stars : 216233595400157604,
	gift_num : 6,
	can_craft_at : 41,
);
```