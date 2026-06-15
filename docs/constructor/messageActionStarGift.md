# messageActionStarGift

**Description** : *You received a gift, see here &raquo; for more info*

**Layer** : 227

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
		id : -3703689189529054888,
		sticker : $client->documentEmpty(
			id : 3426220469820575532,
		),
		stars : 2877895277580412951,
		availability_remains : 93,
		availability_total : 78,
		availability_resale : 4515881003447892474,
		convert_stars : 8494220690651572311,
		first_sale_date : 26,
		last_sale_date : 42,
		upgrade_stars : -4765411533412714990,
		resell_min_stars : -2507909913652852898,
		title : 'is3uB0MGx8DR7qIb',
		released_by : $client->peerUser(
			user_id : -2768037475226384985,
		),
		per_user_total : 7,
		per_user_remains : 54,
		locked_until_date : 0,
		auction_slug : 'Xg6FQ3uCP2ZmjzkW',
		gifts_per_round : 51,
		auction_start_date : 3,
		upgrade_variants : 43,
		background : $client->starGiftBackground(
			center_color : 4,
			edge_color : 60,
			text_color : 57,
		),
	),
	message : $client->textWithEntities(
		text : 'XboEstrWy35N4ev6',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 59,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 51,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 46,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 10,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 85,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 14,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 22,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 43,
				language : 'kHzrSXwmRWJVKNAO',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 65,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 60,
				user_id : -1064412011828955680,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 42,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 7,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 76,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 53,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 29,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 38,
				document_id : -6024464949493703525,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 98,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 11,
				date : 47,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 73,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 58,
				old_text : 'G4Eu7irlD8AqYBts',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 97,
			),
		),
	),
	convert_stars : 2537683241346273547,
	upgrade_msg_id : 84,
	upgrade_stars : -2761980242961675187,
	from_id : $client->peerUser(
		user_id : 4755953654842533401,
	),
	peer : $client->peerUser(
		user_id : 2605434093979293224,
	),
	saved_id : 7673018005765856544,
	prepaid_upgrade_hash : '2hYXLJvZoFan8ydG',
	gift_msg_id : 72,
	to_id : $client->peerUser(
		user_id : -6072686420654573701,
	),
	gift_num : 99,
);
```