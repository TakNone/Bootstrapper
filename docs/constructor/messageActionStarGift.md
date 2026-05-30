# messageActionStarGift

**Description** : *You received a gift, see here &raquo; for more info*

**Layer** : 225

```tl
messageActionStarGift#ea2c31d3 flags:# name_hidden:flags.0?true saved:flags.2?true converted:flags.3?true upgraded:flags.5?true refunded:flags.9?true can_upgrade:flags.10?true prepaid_upgrade:flags.13?true upgrade_separate:flags.16?true auction_acquired:flags.17?true gift:StarGift message:flags.1?TextWithEntities convert_stars:flags.4?long upgrade_msg_id:flags.5?int upgrade_stars:flags.8?long from_id:flags.11?Peer peer:flags.12?Peer saved_id:flags.12?long prepaid_upgrade_hash:flags.14?string gift_msg_id:flags.15?int to_id:flags.18?Peer gift_num:flags.19?int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **name_hidden** | [`flags.0?true`](type/true) | If set, the name of the sender of the gift will be hidden if the destination user decides to display the gift on their profile |
| **saved** | [`flags.2?true`](type/true) | Whether this gift was added to the destination user's profile (may be toggled using payments.saveStarGift and fetched using payments.getSavedStarGifts) |
| **converted** | [`flags.3?true`](type/true) | Whether this gift was converted to Telegram Stars and cannot be displayed on the profile anymore |
| **upgraded** | [`flags.5?true`](type/true) | This gift was upgraded to a collectible gift » |
| **refunded** | [`flags.9?true`](type/true) | This gift is not available anymore because a request to refund the payment related to this gift was made, and the money was returned |
| **can_upgrade** | [`flags.10?true`](type/true) | If set, this gift can be upgraded to a collectible gift; can only be set for the receiver of a gift |
| **prepaid_upgrade** | [`flags.13?true`](type/true) | The sender has already pre-paid for the upgrade of this gift to a collectible gift |
| **upgrade_separate** | [`flags.16?true`](type/true) | This service message is the notification of a separate pre-payment for the upgrade of a gift we own |
| **auction_acquired** | [`flags.17?true`](type/true) | NOTHING |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | Info about the gift |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Additional message from the sender of the gift |
| **convert_stars** | [`flags.4?long`](type/long) | The receiver of this gift may convert it to this many Telegram Stars, instead of displaying it on their profile page.convert_stars will be equal to stars only if the gift was bought using recently bought Telegram Stars, otherwise it will be less than stars |
| **upgrade_msg_id** | [`flags.5?int`](type/int) | If set, this gift was upgraded to a collectible gift, and the corresponding messageActionStarGiftUnique is available at the specified message ID |
| **upgrade_stars** | [`flags.8?long`](type/long) | The number of Telegram Stars the user can pay to convert the gift into a collectible gift » |
| **from_id** | [`flags.11?Peer`](type/Peer) | Sender of the gift (unset for anonymous gifts) |
| **peer** | [`flags.12?Peer`](type/Peer) | Receiver of the gift |
| **saved_id** | [`flags.12?long`](type/long) | For channel gifts, ID to use in inputSavedStarGiftChat constructors |
| **prepaid_upgrade_hash** | [`flags.14?string`](type/string) | Hash to prepay for a gift upgrade separately » |
| **gift_msg_id** | [`flags.15?int`](type/int) | For separate upgrades, the identifier of the message with the gift whose upgrade was prepaid (only valid for the receiver of the service message) |
| **to_id** | [`flags.18?Peer`](type/Peer) | NOTHING |
| **gift_num** | [`flags.19?int`](type/int) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionStarGift(
	name_hidden : true,
	saved : true,
	converted : true,
	upgraded : true,
	refunded : true,
	can_upgrade : true,
	prepaid_upgrade : true,
	upgrade_separate : true,
	auction_acquired : true,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -5504458901794503562,
		sticker : $client->documentEmpty(
			id : 2436452234828143308,
		),
		stars : 348117089679877763,
		availability_remains : 52,
		availability_total : 55,
		availability_resale : -8364356276448093333,
		convert_stars : -6064159384700277075,
		first_sale_date : 87,
		last_sale_date : 25,
		upgrade_stars : -114782739584357616,
		resell_min_stars : -7664063180670399023,
		title : '0Xt9v7pSV12jH3NA',
		released_by : $client->peerUser(
			user_id : -1532324416227824282,
		),
		per_user_total : 44,
		per_user_remains : 18,
		locked_until_date : 91,
		auction_slug : '0KxG4R3Aj9MZEcSb',
		gifts_per_round : 1,
		auction_start_date : 14,
		upgrade_variants : 10,
		background : $client->starGiftBackground(
			center_color : 12,
			edge_color : 70,
			text_color : 30,
		),
	),
	message : $client->textWithEntities(
		text : 'YERk79BZetwabsTu',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 83,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 11,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 69,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 97,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 19,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 25,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 69,
				language : 'O0vlQ8RSFiTGsx6a',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 86,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 94,
				user_id : -2253009326538600875,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 11,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 14,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 71,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 8,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 66,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 9,
				document_id : 8706034319232209846,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 66,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 67,
				date : 85,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 7,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 6,
				old_text : 't6aAIYOK2E4gTm71',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 42,
			),
		),
	),
	convert_stars : -3349951307244818872,
	upgrade_msg_id : 4,
	upgrade_stars : 9100084566323482548,
	from_id : $client->peerUser(
		user_id : 7197082160943107938,
	),
	peer : $client->peerUser(
		user_id : 5162587144217894018,
	),
	saved_id : 77367970975291654,
	prepaid_upgrade_hash : 'gJ7PDUV1MxI8zZdK',
	gift_msg_id : 58,
	to_id : $client->peerUser(
		user_id : -7762756227309599976,
	),
	gift_num : 99,
);
```