# starGiftUnique

**Description** : *Represents a collectible star gift, see here &raquo; for more info*

**Layer** : 229

```tl
starGiftUnique#85f0a9cd flags:# require_premium:flags.6?true resale_ton_only:flags.7?true theme_available:flags.9?true burned:flags.14?true crafted:flags.15?true id:long gift_id:long title:string slug:string num:int owner_id:flags.0?Peer owner_name:flags.1?string owner_address:flags.2?string attributes:Vector<StarGiftAttribute> availability_issued:int availability_total:int gift_address:flags.3?string resell_amount:flags.4?Vector<StarsAmount> released_by:flags.5?Peer value_amount:flags.8?long value_currency:flags.8?string value_usd_amount:flags.8?long theme_peer:flags.10?Peer peer_color:flags.11?PeerColor host_id:flags.12?Peer offer_min_stars:flags.13?int craft_chance_permille:flags.16?int = StarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **require_premium** | [`flags.6?true`](type/true) | This gift can only be bought by users with a Premium subscription |
| **resale_ton_only** | [`flags.7?true`](type/true) | Whether the gift can be bought only using Grams |
| **theme_available** | [`flags.9?true`](type/true) | A chat theme associated to this gift is available, see here » for more info on how to use it |
| **burned** | [`flags.14?true`](type/true) | This gift was already used as an ingredient for crafting another collectible gift » |
| **crafted** | [`flags.15?true`](type/true) | This collectible gift was obtained by crafting », not by upgrading a regular gift |
| <mark>id</mark> | [`long`](type/long) | Unique identifier of this collectible gift |
| <mark>gift_id</mark> | [`long`](type/long) | ID of the regular gift from which this gift was upgraded (all collectible gifts upgraded from the same gift will have the same gift_id, with different attributes) |
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
| **value_amount** | [`flags.8?long`](type/long) | Estimated price of the gift |
| **value_currency** | [`flags.8?string`](type/string) | Currency for the gift's estimated price |
| **value_usd_amount** | [`flags.8?long`](type/long) | Estimated price of the gift in USD cents |
| **theme_peer** | [`flags.10?Peer`](type/Peer) | The current chat where the associated chat theme is installed, if any (gift-based themes can only be installed in one chat at a time) |
| **peer_color** | [`flags.11?PeerColor`](type/PeerColor) | Can contain a collectible message palette » |
| **host_id** | [`flags.12?Peer`](type/Peer) | If set, the gift is currently hosted on the specified user or channel profile », while ownership remains with the TON wallet in owner_address |
| **offer_min_stars** | [`flags.13?int`](type/int) | If set, you can send a purchase offer for this gift »: the minimum offer price is specified in this flag |
| **craft_chance_permille** | [`flags.16?int`](type/int) | Success probability, per 1000, contributed by this gift when it is used for crafting » |

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
	id : -8614008965761770677,
	gift_id : -987537577215993870,
	title : '8Vx4Jl2ARINLH6Qg',
	slug : 'zibcT9kQ06d4HrLj',
	num : 100,
	owner_id : $client->peerUser(
		user_id : -4203564715838951907,
	),
	owner_name : '6ENeQbsfjYOimncu',
	owner_address : 'AWLwpHFuVyZ9t4cQ',
	attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : 'KtByHlgOx3GNRA9n',
			document : $client->documentEmpty(
				id : 2007049431311742998,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 93,
			),
		),
		$client->starGiftAttributePattern(
			name : 'CKyVRpXnaefW3Ocw',
			document : $client->documentEmpty(
				id : -1616732521793091517,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 23,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'SeYN7JgFZqLdmCMn',
			backdrop_id : 19,
			center_color : 73,
			edge_color : 96,
			pattern_color : 88,
			text_color : 40,
			rarity : $client->starGiftAttributeRarity(
				permille : 24,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 5382101090000768623,
			),
			recipient_id : $client->peerUser(
				user_id : 3214572255440847482,
			),
			date : 18,
			message : $client->textWithEntities(
				text : 'RgqaEBlrO3GUc6IY',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 47,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 86,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 3,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 52,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 46,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 75,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 3,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 59,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 29,
						language : 'JEyBetboTWcSm0vd',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 33,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 72,
						user_id : 5794893130319345455,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 17,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 1,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 51,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 14,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 90,
						document_id : 3302656085024054798,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 58,
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
						date : 3,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 89,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 24,
						old_text : 'NPYgRjTGJ6z4wh5a',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 6,
					),
				),
			),
		),
	),
	availability_issued : 30,
	availability_total : 45,
	gift_address : 'UMVIQNZGLA4iwm3H',
	resell_amount : array(
		$client->starsAmount(
			amount : -2144904694458661501,
			nanos : 43,
		),
		$client->starsTonAmount(
			amount : -6954947791929402234,
		),
	),
	released_by : $client->peerUser(
		user_id : 888258143731732550,
	),
	value_amount : 7785826169366154042,
	value_currency : 'KqgIyhc2rkSdxOPX',
	value_usd_amount : 5774980106247719316,
	theme_peer : $client->peerUser(
		user_id : -9076954876252015145,
	),
	peer_color : $client->peerColor(
		color : 90,
		background_emoji_id : -8576315257438800078,
	),
	host_id : $client->peerUser(
		user_id : -9216386788723072119,
	),
	offer_min_stars : 19,
	craft_chance_permille : 21,
);
```