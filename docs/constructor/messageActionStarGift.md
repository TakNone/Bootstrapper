# messageActionStarGift

**Description** : *You received a gift, see here &raquo; for more info*

**Layer** : 233

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
| **auction_acquired** | [`flags.17?true`](type/true) | If set, this gift was acquired in a collectible gifts auction » |
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
| **to_id** | [`flags.18?Peer`](type/Peer) | For gifts acquired in an auction » (i.e. when auction_acquired is set), the peer the gift was assigned to; only present if the target peer is different from the bidder, in which case it will only be present to the messageActionStarGift sent to the bidder, not to the messageActionStarGift sent to the target peer |
| **gift_num** | [`flags.19?int`](type/int) | For gifts acquired in an auction », the collectible number of the won collectible gift »; this field is disjoint from auction_acquired because only auction collectibles won before this field was introduced in the API will not have this flag set |

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
		id : 7019302002955413520,
		sticker : $client->documentEmpty(
			id : 1985639496109653430,
		),
		stars : -422788850379920799,
		availability_remains : 43,
		availability_total : 35,
		availability_resale : 1465987498915737886,
		convert_stars : 2824556599727100458,
		first_sale_date : 31,
		last_sale_date : 62,
		upgrade_stars : 8123375405654259391,
		resell_min_stars : 2559722074253966487,
		title : 'ahscMGdDFZ0lkr1E',
		released_by : $client->peerUser(
			user_id : -1867464961758830547,
		),
		per_user_total : 48,
		per_user_remains : 91,
		locked_until_date : 60,
		auction_slug : 'UAtrvsSYaKHObJZe',
		gifts_per_round : 62,
		auction_start_date : 64,
		upgrade_variants : 45,
		background : $client->starGiftBackground(
			center_color : 41,
			edge_color : 4,
			text_color : 21,
		),
	),
	message : $client->textWithEntities(
		text : 'kwP4GWfstnOF5CNI',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 28,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 71,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 36,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 42,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 100,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 96,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 14,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 64,
				language : 'p62bNZdS8HhgnJfv',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 96,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 87,
				user_id : 4939897721314538535,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 95,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 64,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 56,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 74,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 7,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 53,
				document_id : -640650188630045729,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 69,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 38,
				date : 62,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 14,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 80,
				old_text : 'q7NT0emsODV2Ed5y',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 99,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 32,
			),
		),
	),
	convert_stars : 5903113061231410995,
	upgrade_msg_id : 62,
	upgrade_stars : -5154419287527595797,
	from_id : $client->peerUser(
		user_id : 4453352645772689222,
	),
	peer : $client->peerUser(
		user_id : 326040788657526284,
	),
	saved_id : -4018311686092910760,
	prepaid_upgrade_hash : 'VlWo60jvSyMcHATC',
	gift_msg_id : 8,
	to_id : $client->peerUser(
		user_id : 7769680005249471720,
	),
	gift_num : 44,
);
```