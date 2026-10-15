# messageActionStarGift

**Description** : *You received a gift, see here &raquo; for more info*

**Layer** : 229

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
		id : -4833876114422614941,
		sticker : $client->documentEmpty(
			id : 6094410977582050390,
		),
		stars : -3952955742147025450,
		availability_remains : 38,
		availability_total : 52,
		availability_resale : -2508793080728527892,
		convert_stars : -1373878015162741014,
		first_sale_date : 9,
		last_sale_date : 9,
		upgrade_stars : 4392417692010851211,
		resell_min_stars : 1416085688233256200,
		title : 'fM9TohOCJrEAmzic',
		released_by : $client->peerUser(
			user_id : -4790019244386070250,
		),
		per_user_total : 68,
		per_user_remains : 44,
		locked_until_date : 17,
		auction_slug : 'FrdA4P89cWak7Dw1',
		gifts_per_round : 52,
		auction_start_date : 36,
		upgrade_variants : 91,
		background : $client->starGiftBackground(
			center_color : 81,
			edge_color : 44,
			text_color : 10,
		),
	),
	message : $client->textWithEntities(
		text : '9IMy6KFZXGcWtEsH',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 26,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 93,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 42,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 9,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 9,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 3,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 29,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 87,
				language : '9nTvSszxHIV0Jk5F',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 77,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 58,
				user_id : 9119880156956897905,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 39,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 16,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 16,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 54,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 12,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 72,
				document_id : -6853669108926921334,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 40,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 95,
				date : 91,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 73,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 75,
				old_text : 'CZ1BQP94SltdIAzv',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 12,
			),
		),
	),
	convert_stars : -4973935555406914557,
	upgrade_msg_id : 17,
	upgrade_stars : 3594097141920712543,
	from_id : $client->peerUser(
		user_id : 7109444159644099991,
	),
	peer : $client->peerUser(
		user_id : 5806862451463337887,
	),
	saved_id : -187471530245587448,
	prepaid_upgrade_hash : 'Uf9Dx6TegiOqyFRd',
	gift_msg_id : 66,
	to_id : $client->peerUser(
		user_id : -5009599293676074935,
	),
	gift_num : 87,
);
```