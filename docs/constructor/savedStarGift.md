# savedStarGift

**Description** : *Represents a gift owned by a peer*

**Layer** : 218

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
		user_id : -2616146339340980251,
	),
	date : 43,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 7750644958650669784,
		sticker : $client->documentEmpty(
			id : -7002501412673235082,
		),
		stars : -1134901914788259038,
		availability_remains : 82,
		availability_total : 80,
		availability_resale : 8167426578513397981,
		convert_stars : 1343659472593547801,
		first_sale_date : 12,
		last_sale_date : 80,
		upgrade_stars : 3484944917897974534,
		resell_min_stars : -8422648279119814948,
		title : 'tSZOQ2k7iqV4HWXG',
		released_by : $client->peerUser(
			user_id : -2275704758672116888,
		),
		per_user_total : 29,
		per_user_remains : 50,
		locked_until_date : 22,
		auction_slug : 'FU1bD6LfZzqAmYBi',
		gifts_per_round : 12,
	),
	message : $client->textWithEntities(
		text : 'GnC2fEUq9w3jDP6z',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 66,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 55,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 11,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 83,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 74,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 53,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 75,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 72,
				language : '3eJuwQLfkDlNVEAS',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 32,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 1,
				user_id : 3555887616038278860,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 13,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 21,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 34,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 85,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 55,
				document_id : 4349899523963188338,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 79,
			),
		),
	),
	msg_id : 58,
	saved_id : -1888458103856489436,
	convert_stars : 5706438950928801357,
	upgrade_stars : -8096767257029032174,
	can_export_at : 89,
	transfer_stars : -6865660161447991647,
	can_transfer_at : 1,
	can_resell_at : 79,
	collection_id : array(42),
	prepaid_upgrade_hash : 'lZBCdO5mGUeY9AuT',
	drop_original_details_stars : -9006622723579789577,
);
```