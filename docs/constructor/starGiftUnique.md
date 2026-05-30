# starGiftUnique

**Description** : *Represents a collectible star gift, see here &raquo; for more info*

**Layer** : 222

```tl
starGiftUnique#85f0a9cd flags:# require_premium:flags.6?true resale_ton_only:flags.7?true theme_available:flags.9?true burned:flags.14?true crafted:flags.15?true id:long gift_id:long title:string slug:string num:int owner_id:flags.0?Peer owner_name:flags.1?string owner_address:flags.2?string attributes:Vector<StarGiftAttribute> availability_issued:int availability_total:int gift_address:flags.3?string resell_amount:flags.4?Vector<StarsAmount> released_by:flags.5?Peer value_amount:flags.8?long value_currency:flags.8?string value_usd_amount:flags.8?long theme_peer:flags.10?Peer peer_color:flags.11?PeerColor host_id:flags.12?Peer offer_min_stars:flags.13?int craft_chance_permille:flags.16?int = StarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **require_premium** | [`flags.6?true`](type/true) | This gift can only be bought by users with a Premium subscription |
| **resale_ton_only** | [`flags.7?true`](type/true) | Whether the gift can be bought only using Toncoins |
| **theme_available** | [`flags.9?true`](type/true) | A chat theme associated to this gift is available, see here » for more info on how to use it |
| **burned** | [`flags.14?true`](type/true) | NOTHING |
| **crafted** | [`flags.15?true`](type/true) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | Identifier of the collectible gift |
| <mark>gift_id</mark> | [`long`](type/long) | Unique ID of the gift |
| <mark>title</mark> | [`string`](type/string) | Collectible title |
| <mark>slug</mark> | [`string`](type/string) | Slug that can be used to create a collectible gift deep link », or elsewhere in the API where a collectible slug is accepted |
| <mark>num</mark> | [`int`](type/int) | Unique identifier of this collectible gift among all (already upgraded) collectible gifts of the same type |
| **owner_id** | [`flags.0?Peer`](type/Peer) | The owner of the gift |
| **owner_name** | [`flags.1?string`](type/string) | The name of the owner if neither owner_id nor owner_address are set |
| **owner_address** | [`flags.2?string`](type/string) | For NFTs on the TON blockchain, contains the address of the owner (append it to the ton_blockchain_explorer_url client configuration value » to obtain a link with information about the address) |
| <mark>attributes</mark> | [`Vector<StarGiftAttribute>`](type/StarGiftAttribute) | Collectible attributes |
| <mark>availability_issued</mark> | [`int`](type/int) | Total number of gifts of the same type that were upgraded to a collectible gift |
| <mark>availability_total</mark> | [`int`](type/int) | Total number of gifts of the same type that can be upgraded or were already upgraded to a collectible gift |
| **gift_address** | [`flags.3?string`](type/string) | For NFTs on the TON blockchain, contains the address of the NFT (append it to the ton_blockchain_explorer_url client configuration value » to obtain a link with information about the address) |
| **resell_amount** | [`flags.4?Vector<StarsAmount>`](type/StarsAmount) | Resale price of the gift |
| **released_by** | [`flags.5?Peer`](type/Peer) | This gift was released by the specified peer |
| **value_amount** | [`flags.8?long`](type/long) | Price of the gift |
| **value_currency** | [`flags.8?string`](type/string) | Currency for the gift's price |
| **value_usd_amount** | [`flags.8?long`](type/long) | NOTHING |
| **theme_peer** | [`flags.10?Peer`](type/Peer) | The current chat where the associated chat theme is installed, if any (gift-based themes can only be installed in one chat at a time) |
| **peer_color** | [`flags.11?PeerColor`](type/PeerColor) | NOTHING |
| **host_id** | [`flags.12?Peer`](type/Peer) | NOTHING |
| **offer_min_stars** | [`flags.13?int`](type/int) | NOTHING |
| **craft_chance_permille** | [`flags.16?int`](type/int) | NOTHING |

---

## Type

[StarGift](type/StarGift)

---

## Example

```php
$starGift = $client->starGiftUnique(
	require_premium : true,
	resale_ton_only : true,
	theme_available : true,
	burned : true,
	crafted : true,
	id : 1465202102168654128,
	gift_id : 260709465837364554,
	title : 'iBar0I5Q7FGAjUk4',
	slug : 'Xu0FwxZHzaDyOLpn',
	num : 85,
	owner_id : $client->peerUser(
		user_id : -4181784670604369970,
	),
	owner_name : 'cm8hAyO5fjFQnKzH',
	owner_address : 'qcvAGr3NJwXzOMn7',
	attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : '7cAntGgJu0CN2qY6',
			document : $client->documentEmpty(
				id : 3692214780930873032,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 23,
			),
		),
		$client->starGiftAttributePattern(
			name : 'OoFRwzpZKQXGjUux',
			document : $client->documentEmpty(
				id : -4218175475028758399,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 67,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : '89tN6Wi4Y0IqShAE',
			backdrop_id : 14,
			center_color : 31,
			edge_color : 100,
			pattern_color : 41,
			text_color : 49,
			rarity : $client->starGiftAttributeRarity(
				permille : 10,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -268241865855970329,
			),
			recipient_id : $client->peerUser(
				user_id : -8611830136512036045,
			),
			date : 48,
			message : $client->textWithEntities(
				text : 'qRgAkMejQ72pV9FJ',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 10,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 34,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 36,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 93,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 89,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 63,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 74,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 74,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 91,
						language : '3OHbkSD5dGu7cBV2',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 81,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 44,
						user_id : -2020617998699766970,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 73,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 53,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 41,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 100,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 0,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 34,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 15,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 57,
						document_id : -7917576297106344814,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 43,
					),
				),
			),
		),
	),
	availability_issued : 40,
	availability_total : 89,
	gift_address : '2wEZlCJXogp3A60m',
	resell_amount : array(
		$client->starsAmount(
			amount : -8180600352451153083,
			nanos : 41,
		),
		$client->starsTonAmount(
			amount : -6194725840708572201,
		),
	),
	released_by : $client->peerUser(
		user_id : 7339874409702516345,
	),
	value_amount : 1754268208092088855,
	value_currency : 'rumz3LFsyOex1kB4',
	value_usd_amount : 2770752364584930422,
	theme_peer : $client->peerUser(
		user_id : 7312758497537365018,
	),
	peer_color : $client->peerColor(
		color : 17,
		background_emoji_id : 1156604936230383536,
	),
	host_id : $client->peerUser(
		user_id : 4597806038564677370,
	),
	offer_min_stars : 24,
	craft_chance_permille : 36,
);
```