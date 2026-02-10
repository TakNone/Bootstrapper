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
	id : -9107798940746723686,
	gift_id : -1107965338161289738,
	title : '10LUJeKIs5GcwyFo',
	slug : 'Yj4uPLmapCdFIeOb',
	num : 35,
	owner_id : $client->peerUser(
		user_id : -2740797019219724918,
	),
	owner_name : 'ViKpCOG3dQsfMWvT',
	owner_address : 'm7QkeS3iGsjzaR8t',
	attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : 'GIwKfOztxBYPJ9e3',
			document : $client->documentEmpty(
				id : -6719933025005805153,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 55,
			),
		),
		$client->starGiftAttributePattern(
			name : 'IEihdN3b9O6l8LXw',
			document : $client->documentEmpty(
				id : 5392479311603981053,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 86,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'eU7WJKnSkX3plwO6',
			backdrop_id : 88,
			center_color : 63,
			edge_color : 83,
			pattern_color : 61,
			text_color : 76,
			rarity : $client->starGiftAttributeRarity(
				permille : 20,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 2887707683105439473,
			),
			recipient_id : $client->peerUser(
				user_id : 4758671367768133463,
			),
			date : 95,
			message : $client->textWithEntities(
				text : 'LxgXdtI7sSue0cam',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 75,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 31,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 99,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 10,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 29,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 45,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 1,
						language : '17xR3HZLDk5eYo9U',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 28,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 79,
						user_id : 6428450966141215779,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 38,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 0,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 61,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 83,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 78,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 88,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 40,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 20,
						document_id : -8997442862264833795,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 82,
					),
				),
			),
		),
	),
	availability_issued : 48,
	availability_total : 47,
	gift_address : '51oIZmHVO7ysXbGC',
	resell_amount : array(
		$client->starsAmount(
			amount : -8105879931453619479,
			nanos : 52,
		),
		$client->starsTonAmount(
			amount : -8864742583079568437,
		),
	),
	released_by : $client->peerUser(
		user_id : 5439909413279496942,
	),
	value_amount : 4288581067350637972,
	value_currency : 'TVh2Oxg5HfjAdc1L',
	value_usd_amount : -8121412334902194312,
	theme_peer : $client->peerUser(
		user_id : 351562654673549141,
	),
	peer_color : $client->peerColor(
		color : 22,
		background_emoji_id : 3297275091308476705,
	),
	host_id : $client->peerUser(
		user_id : 2335631960153762665,
	),
	offer_min_stars : 54,
	craft_chance_permille : 47,
);
```