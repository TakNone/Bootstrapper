# messageActionStarGift

**Description** : *You received a gift, see here &raquo; for more info*

**Layer** : 222

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
		id : -3696340537045265280,
		sticker : $client->documentEmpty(
			id : -7728956646252968249,
		),
		stars : -3043291421928028630,
		availability_remains : 1,
		availability_total : 65,
		availability_resale : 2742504656774251100,
		convert_stars : -4046489915947257463,
		first_sale_date : 38,
		last_sale_date : 90,
		upgrade_stars : 4132731805972910630,
		resell_min_stars : -377932029930817429,
		title : 'F08wgiBWKCuEderl',
		released_by : $client->peerUser(
			user_id : -2046858411980427452,
		),
		per_user_total : 43,
		per_user_remains : 17,
		locked_until_date : 7,
		auction_slug : 'mtFlD4QvfAdkaRBH',
		gifts_per_round : 80,
		auction_start_date : 49,
		upgrade_variants : 65,
		background : $client->starGiftBackground(
			center_color : 47,
			edge_color : 78,
			text_color : 28,
		),
	),
	message : $client->textWithEntities(
		text : 'Q21aLVomGJg9WASY',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 6,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 60,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 40,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 95,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 71,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 69,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 53,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 61,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 34,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 95,
				language : 't39wrLhH7iCuWTzD',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 87,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 57,
				user_id : 8749625038116592423,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 98,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 90,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 96,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 3,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 67,
				document_id : -5199660541066958372,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 62,
			),
		),
	),
	convert_stars : 3226277426742471916,
	upgrade_msg_id : 32,
	upgrade_stars : -6671687562358586200,
	from_id : $client->peerUser(
		user_id : 7665453858415143895,
	),
	peer : $client->peerUser(
		user_id : -5875802847542893243,
	),
	saved_id : 5463729817759183839,
	prepaid_upgrade_hash : 'vnYBDeJSf4rGPi93',
	gift_msg_id : 77,
	to_id : $client->peerUser(
		user_id : -9145650261148008644,
	),
	gift_num : 80,
);
```