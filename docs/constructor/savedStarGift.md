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
		user_id : -3669054561818534647,
	),
	date : 97,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 3025331985707786151,
		sticker : $client->documentEmpty(
			id : -3908395837852114594,
		),
		stars : -2622021258196852817,
		availability_remains : 26,
		availability_total : 76,
		availability_resale : -7277647394222729011,
		convert_stars : 2225289590909149609,
		first_sale_date : 55,
		last_sale_date : 25,
		upgrade_stars : -647835147092947553,
		resell_min_stars : 5518215885328172686,
		title : 'ki0Q7p9M2Rc1Yrsv',
		released_by : $client->peerUser(
			user_id : 6820595825573848590,
		),
		per_user_total : 61,
		per_user_remains : 39,
		locked_until_date : 17,
		auction_slug : 'UXy1NGm52Z08CFWd',
		gifts_per_round : 79,
	),
	message : $client->textWithEntities(
		text : 'lC8txqcVJfQ9PMEB',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 45,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 65,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 85,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 5,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 50,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 51,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 41,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 50,
				language : 'T6Vd2UDRZcCswPBp',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 97,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 89,
				user_id : -3072457243549926459,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 21,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 79,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 44,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 85,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 20,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 48,
				document_id : 4436930486012668143,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 93,
			),
		),
	),
	msg_id : 83,
	saved_id : 5092356615823465683,
	convert_stars : -4613427127554983552,
	upgrade_stars : 8127724878106246795,
	can_export_at : 58,
	transfer_stars : 1538485501419706861,
	can_transfer_at : 23,
	can_resell_at : 36,
	collection_id : array(98),
	prepaid_upgrade_hash : 'HUzr0jYWpoIsQJXk',
	drop_original_details_stars : 1843613996629822396,
);
```