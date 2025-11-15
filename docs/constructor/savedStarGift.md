# savedStarGift

**Description** : *Represents a gift owned by a peer*

**Layer** : 216

```tl
savedStarGift#8983a452 flags:# name_hidden:flags.0?true unsaved:flags.5?true refunded:flags.9?true can_upgrade:flags.10?true pinned_to_top:flags.12?true upgrade_separate:flags.17?true from_id:flags.1?Peer date:int gift:StarGift message:flags.2?TextWithEntities msg_id:flags.3?int saved_id:flags.11?long convert_stars:flags.4?long upgrade_stars:flags.6?long can_export_at:flags.7?int transfer_stars:flags.8?long can_transfer_at:flags.13?int can_resell_at:flags.14?int collection_id:flags.15?Vector<int> prepaid_upgrade_hash:flags.16?string drop_original_details_stars:flags.18?long = SavedStarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		user_id : 8303202806439456441,
	),
	date : 8,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		id : 5066987953969139866,
		sticker : $client->documentEmpty(
			id : -4847040663427570157,
		),
		stars : -6836737679011981235,
		availability_remains : 17,
		availability_total : 86,
		availability_resale : 2521825301772183697,
		convert_stars : -2835390974123279611,
		first_sale_date : 13,
		last_sale_date : 42,
		upgrade_stars : -6616409307210784442,
		resell_min_stars : -8442274510368567474,
		title : 'DpRFId4Q9t7GmzbT',
		released_by : $client->peerUser(
			user_id : 5028520854244244687,
		),
		per_user_total : 54,
		per_user_remains : 8,
		locked_until_date : 64,
	),
	message : $client->textWithEntities(
		text : 'dmVKOUuh6Cis2c8J',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 85,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 71,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 57,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 47,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 54,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 29,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 5,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 80,
				language : '8db96ApWSR2tfKkg',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 31,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 43,
				user_id : 954150225106674871,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 53,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 69,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 55,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 64,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 2,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 64,
				document_id : -3845201914013611845,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 20,
			),
		),
	),
	msg_id : 81,
	saved_id : 1505026244831732406,
	convert_stars : 6098539727744363410,
	upgrade_stars : 806080459426086854,
	can_export_at : 19,
	transfer_stars : 6882170072626332533,
	can_transfer_at : 99,
	can_resell_at : 9,
	collection_id : array(15),
	prepaid_upgrade_hash : 'lVeODwMHYZ5G2v9m',
	drop_original_details_stars : -6921167077985001468,
);
```