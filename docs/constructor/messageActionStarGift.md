# messageActionStarGift

**Description** : *You received a gift, see here &raquo; for more info*

**Layer** : 218

```tl
messageActionStarGift#db596550 flags:# name_hidden:flags.0?true saved:flags.2?true converted:flags.3?true upgraded:flags.5?true transferred:flags.6?true refunded:flags.9?true can_upgrade:flags.10?true prepaid_upgrade:flags.13?true upgrade_separate:flags.16?true auction_acquired:flags.17?true gift:StarGift message:flags.1?TextWithEntities convert_stars:flags.4?long upgrade_msg_id:flags.5?int upgrade_stars:flags.8?long from_id:flags.11?Peer peer:flags.12?Peer saved_id:flags.12?long prepaid_upgrade_hash:flags.14?string gift_msg_id:flags.15?int to_id:flags.18?Peer = MessageAction;
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
| **transferred** | [`flags.6?true`](type/true) | NOTHING |
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
	transferred : true,
	refunded : true,
	can_upgrade : true,
	prepaid_upgrade : true,
	upgrade_separate : true,
	auction_acquired : true,
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -17985356109620880,
		sticker : $client->documentEmpty(
			id : -4587735170035779102,
		),
		stars : 7002993980753004644,
		availability_remains : 95,
		availability_total : 65,
		availability_resale : 6480062928010975310,
		convert_stars : 909441150853826910,
		first_sale_date : 78,
		last_sale_date : 31,
		upgrade_stars : -425179318120910366,
		resell_min_stars : -2750484891347229005,
		title : 'zWefLNaRGK51Es3S',
		released_by : $client->peerUser(
			user_id : 5174077752948894320,
		),
		per_user_total : 20,
		per_user_remains : 77,
		locked_until_date : 62,
		auction_slug : 'MoFmwaSPhs9pD2GZ',
		gifts_per_round : 9,
	),
	message : $client->textWithEntities(
		text : 'ygeQHR0raqIFDSXM',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 46,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 97,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 10,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 82,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 89,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 35,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 40,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 84,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 8,
				language : 'E7QtBOMs8o1RzTZ9',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 99,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 41,
				user_id : 9096116826512501117,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 95,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 83,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 65,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 96,
				document_id : 4306350833606979176,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 91,
			),
		),
	),
	convert_stars : -8862593519740743174,
	upgrade_msg_id : 34,
	upgrade_stars : -2695762914914807143,
	from_id : $client->peerUser(
		user_id : -3355620268161935338,
	),
	peer : $client->peerUser(
		user_id : 4621361565664406144,
	),
	saved_id : 452459866774292978,
	prepaid_upgrade_hash : '6borezTUlm1ODBaP',
	gift_msg_id : 17,
	to_id : $client->peerUser(
		user_id : -5715587131285529212,
	),
);
```