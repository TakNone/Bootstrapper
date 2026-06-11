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
	id : -1938763370406898771,
	gift_id : 8666852074153604663,
	title : 'WEIRD0k2QJ1KaLqU',
	slug : 'ciBNMC10FwERZSLP',
	num : 90,
	owner_id : $client->peerUser(
		user_id : 3002811854602834842,
	),
	owner_name : 'rEej8OY52fWu41gv',
	owner_address : 'Q2bsqIN78C1wKfl4',
	attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : 'K0ObWNaXFvZTyrLp',
			document : $client->documentEmpty(
				id : 1356116436832125171,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 48,
			),
		),
		$client->starGiftAttributePattern(
			name : 'K9oGciBwMyvf7j0D',
			document : $client->documentEmpty(
				id : -442712733383493611,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 15,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'y9BCAv5mDsMPEZzt',
			backdrop_id : 47,
			center_color : 70,
			edge_color : 0,
			pattern_color : 5,
			text_color : 81,
			rarity : $client->starGiftAttributeRarity(
				permille : 60,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -1152254317407139251,
			),
			recipient_id : $client->peerUser(
				user_id : 1850096836656656979,
			),
			date : 94,
			message : $client->textWithEntities(
				text : 'm5lAcXxOY7dFNQL4',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 34,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 91,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 63,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 93,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 20,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 27,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 76,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 56,
						language : 'dTeyl3Ipu1rCsFLo',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 11,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 11,
						user_id : 468252574898864375,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 5,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 36,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 41,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 87,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 33,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 69,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 65,
						document_id : -5504379303537117904,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 11,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 6,
						date : 86,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 41,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 60,
						old_text : 'ZaQdJK73lwR0qkyO',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 94,
					),
				),
			),
		),
	),
	availability_issued : 52,
	availability_total : 57,
	gift_address : 'teEI2JPSdNogajZ7',
	resell_amount : array(
		$client->starsAmount(
			amount : 6770628403820561227,
			nanos : 4,
		),
		$client->starsTonAmount(
			amount : 6612572429633530261,
		),
	),
	released_by : $client->peerUser(
		user_id : 7295774188586013658,
	),
	value_amount : 7761062113551693401,
	value_currency : 'rLMdSpVvWfglaNwc',
	value_usd_amount : -1127602786665442985,
	theme_peer : $client->peerUser(
		user_id : -7327717633712758219,
	),
	peer_color : $client->peerColor(
		color : 20,
		background_emoji_id : 4714111788758315313,
	),
	host_id : $client->peerUser(
		user_id : -2595485947354708002,
	),
	offer_min_stars : 91,
	craft_chance_permille : 5,
);
```