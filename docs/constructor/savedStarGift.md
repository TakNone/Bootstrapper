# savedStarGift

**Description** : *Represents a gift owned by a peer*

**Layer** : 222

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
		user_id : 1530839623078762116,
	),
	date : 60,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -7168430108762997556,
		sticker : $client->documentEmpty(
			id : -2268841210904531977,
		),
		stars : 8963078527400605669,
		availability_remains : 100,
		availability_total : 55,
		availability_resale : -6233953977988976157,
		convert_stars : 8385551693713037874,
		first_sale_date : 43,
		last_sale_date : 2,
		upgrade_stars : 8445342355435784506,
		resell_min_stars : -2069385995087405495,
		title : '6ESc9K43x1sFTaqi',
		released_by : $client->peerUser(
			user_id : 5631444056827324393,
		),
		per_user_total : 50,
		per_user_remains : 50,
		locked_until_date : 19,
		auction_slug : 'CKLJ8ltZzUrpbjGx',
		gifts_per_round : 37,
		auction_start_date : 80,
		upgrade_variants : 5,
		background : $client->starGiftBackground(
			center_color : 76,
			edge_color : 8,
			text_color : 80,
		),
	),
	message : $client->textWithEntities(
		text : 'VwyEYFBDUSlOiG0o',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 90,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 90,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 70,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 16,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 30,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 41,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 78,
				language : 'BQgqOYDhe8VlasAE',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 14,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 18,
				user_id : 3001864739263084622,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 36,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 80,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 56,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 85,
				document_id : -532573947752716256,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 16,
			),
		),
	),
	msg_id : 99,
	saved_id : 3013905642227228654,
	convert_stars : 4894974593569306461,
	upgrade_stars : -6368152600683110617,
	can_export_at : 33,
	transfer_stars : -6358542155188939998,
	can_transfer_at : 44,
	can_resell_at : 81,
	collection_id : array(62),
	prepaid_upgrade_hash : 'IOo8tVgJUdAQvf9Y',
	drop_original_details_stars : 4579199451871208551,
	gift_num : 67,
	can_craft_at : 7,
);
```