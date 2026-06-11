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
		id : 7272967177596577164,
		sticker : $client->documentEmpty(
			id : -4999676116442935879,
		),
		stars : 8164881608205694101,
		availability_remains : 7,
		availability_total : 24,
		availability_resale : -4801444720238106100,
		convert_stars : -5758438512004270567,
		first_sale_date : 49,
		last_sale_date : 24,
		upgrade_stars : 7849955153405424287,
		resell_min_stars : 3263715084110675484,
		title : 'mC0SZ1lK2o9vDcE3',
		released_by : $client->peerUser(
			user_id : -6643730234385891574,
		),
		per_user_total : 55,
		per_user_remains : 50,
		locked_until_date : 5,
		auction_slug : 'htLxQv0q7Yn1C3sm',
		gifts_per_round : 29,
		auction_start_date : 44,
		upgrade_variants : 75,
		background : $client->starGiftBackground(
			center_color : 71,
			edge_color : 8,
			text_color : 21,
		),
	),
	message : $client->textWithEntities(
		text : 'al1knXgPetCuIBpc',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 53,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 1,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 25,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 60,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 58,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 69,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 43,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 11,
				language : 'PrEuNQxbn2ghvlRB',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 86,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 72,
				user_id : 2838307422224767931,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 3,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 65,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 75,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 54,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 53,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 21,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 69,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 53,
				document_id : -6444292920473812948,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 51,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 71,
				date : 35,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 29,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 94,
				old_text : 'oMmzDWFd5T3pcS9s',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 56,
			),
		),
	),
	convert_stars : 131057069246936100,
	upgrade_msg_id : 13,
	upgrade_stars : 8431830948418051541,
	from_id : $client->peerUser(
		user_id : -6006787977371645486,
	),
	peer : $client->peerUser(
		user_id : -5441702518916942647,
	),
	saved_id : -8988287016696298122,
	prepaid_upgrade_hash : 'g217JVzY3hKx5ryA',
	gift_msg_id : 35,
	to_id : $client->peerUser(
		user_id : -7434748962587302771,
	),
	gift_num : 23,
);
```