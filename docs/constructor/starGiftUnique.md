# starGiftUnique

**Description** : *Represents a collectible star gift, see here &raquo; for more info*

**Layer** : 225

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
	id : -6004626297953491249,
	gift_id : -8117248107990357073,
	title : 'o9YUz2abv7pZBnOC',
	slug : 'FdjYmh5eywsvSi48',
	num : 8,
	owner_id : $client->peerUser(
		user_id : -8199835648304748477,
	),
	owner_name : 'MfP8YwtAcuIbQWvU',
	owner_address : 'tIQSX5eu3Uj0KpC2',
	attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : 'bnqhXloyCDRQKxzm',
			document : $client->documentEmpty(
				id : -6587703411406873455,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 67,
			),
		),
		$client->starGiftAttributePattern(
			name : 'VcEzHILAQRONM7Xx',
			document : $client->documentEmpty(
				id : -8195077711746739928,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 28,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'Txc9CNq5Yz2nw4Aj',
			backdrop_id : 72,
			center_color : 19,
			edge_color : 68,
			pattern_color : 44,
			text_color : 12,
			rarity : $client->starGiftAttributeRarity(
				permille : 83,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 3267419708545362756,
			),
			recipient_id : $client->peerUser(
				user_id : 8559294062334660049,
			),
			date : 55,
			message : $client->textWithEntities(
				text : 'hodmtnQvDCROI3fU',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 76,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 85,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 28,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 19,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 7,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 0,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 52,
						language : 'SDFW9jzBi5Vfsx6E',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 5,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 14,
						user_id : 281644966742846590,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 36,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 56,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 85,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 10,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 67,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 78,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 49,
						document_id : 6548229017806513,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 78,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 24,
						date : 66,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 60,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 33,
						old_text : 'DX50vYzaKAimGIuO',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 84,
					),
				),
			),
		),
	),
	availability_issued : 33,
	availability_total : 36,
	gift_address : '5gS8Qz7knaYBhquT',
	resell_amount : array(
		$client->starsAmount(
			amount : -1295768738936218613,
			nanos : 59,
		),
		$client->starsTonAmount(
			amount : 940829052299163761,
		),
	),
	released_by : $client->peerUser(
		user_id : -459145564675940601,
	),
	value_amount : 7601627733819377208,
	value_currency : '07NclXB3eZD5YnAF',
	value_usd_amount : -493867812573531759,
	theme_peer : $client->peerUser(
		user_id : 1865316690366569367,
	),
	peer_color : $client->peerColor(
		color : 35,
		background_emoji_id : -2213049631417939341,
	),
	host_id : $client->peerUser(
		user_id : -801897428418536211,
	),
	offer_min_stars : 56,
	craft_chance_permille : 0,
);
```