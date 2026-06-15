# starGiftUnique

**Description** : *Represents a collectible star gift, see here &raquo; for more info*

**Layer** : 227

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
	id : 4649475805466023758,
	gift_id : 7054113805151283757,
	title : 'wN8W5dLI3g7mF9Jr',
	slug : 'nsKSQePUDY63aZxu',
	num : 77,
	owner_id : $client->peerUser(
		user_id : -7497818589411957851,
	),
	owner_name : 'dcOumkbnfhyBI9xC',
	owner_address : 'L5JNjYb3cR0KhsVx',
	attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : 'zHhLIPYfE7xjgOBN',
			document : $client->documentEmpty(
				id : 94173438628721644,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 15,
			),
		),
		$client->starGiftAttributePattern(
			name : 'dQt9N3GDBU2pka7h',
			document : $client->documentEmpty(
				id : 6462327374555623932,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 65,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'ifCeLcDGKlyEjr58',
			backdrop_id : 49,
			center_color : 9,
			edge_color : 74,
			pattern_color : 9,
			text_color : 57,
			rarity : $client->starGiftAttributeRarity(
				permille : 33,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -4031208441279430812,
			),
			recipient_id : $client->peerUser(
				user_id : 7981952722045069015,
			),
			date : 45,
			message : $client->textWithEntities(
				text : 'QZ3nuz7NFOs9CLUt',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 47,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 87,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 73,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 3,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 52,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 45,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 53,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 70,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 14,
						language : 'qKyWZIJmLOoV61uT',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 75,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 62,
						user_id : 376794493223331681,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 33,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 54,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 31,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 7,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 40,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 85,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 15,
						document_id : 1179301667101982028,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 17,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 21,
						date : 30,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 59,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 92,
						old_text : 'Vk3eCfUDGjisXo09',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 60,
					),
				),
			),
		),
	),
	availability_issued : 77,
	availability_total : 25,
	gift_address : 'vw9YK7xcPVXNkhzD',
	resell_amount : array(
		$client->starsAmount(
			amount : 7361952334171484692,
			nanos : 32,
		),
		$client->starsTonAmount(
			amount : -4180856860583692953,
		),
	),
	released_by : $client->peerUser(
		user_id : -8137032540693189802,
	),
	value_amount : -3643070092982996632,
	value_currency : 'pOqdrf6oxYjHkFRB',
	value_usd_amount : 4199004421761421470,
	theme_peer : $client->peerUser(
		user_id : 4877400448022876382,
	),
	peer_color : $client->peerColor(
		color : 12,
		background_emoji_id : -1830499856437234654,
	),
	host_id : $client->peerUser(
		user_id : -1592481272609247747,
	),
	offer_min_stars : 13,
	craft_chance_permille : 35,
);
```