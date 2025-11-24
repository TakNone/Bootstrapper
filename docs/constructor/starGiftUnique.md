# starGiftUnique

**Description** : *Represents a collectible star gift, see here &raquo; for more info*

**Layer** : 218

```tl
starGiftUnique#b0bf741b flags:# require_premium:flags.6?true resale_ton_only:flags.7?true theme_available:flags.9?true id:long gift_id:long title:string slug:string num:int owner_id:flags.0?Peer owner_name:flags.1?string owner_address:flags.2?string attributes:Vector<StarGiftAttribute> availability_issued:int availability_total:int gift_address:flags.3?string resell_amount:flags.4?Vector<StarsAmount> released_by:flags.5?Peer value_amount:flags.8?long value_currency:flags.8?string theme_peer:flags.10?Peer peer_color:flags.11?PeerColor host_id:flags.12?Peer = StarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **require_premium** | [`flags.6?true`](type/true) | This gift can only be bought by users with a Premium subscription |
| **resale_ton_only** | [`flags.7?true`](type/true) | Whether the gift can be bought only using Toncoins |
| **theme_available** | [`flags.9?true`](type/true) | A chat theme associated to this gift is available, see here » for more info on how to use it |
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
| **theme_peer** | [`flags.10?Peer`](type/Peer) | The current chat where the associated chat theme is installed, if any (gift-based themes can only be installed in one chat at a time) |
| **peer_color** | [`flags.11?PeerColor`](type/PeerColor) | NOTHING |
| **host_id** | [`flags.12?Peer`](type/Peer) | NOTHING |

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
	id : 4755636104633724942,
	gift_id : 2377765967588886745,
	title : 'AWRbIZThDmNj9xqv',
	slug : 'jBTCOpWL8bSnfIXa',
	num : 60,
	owner_id : $client->peerUser(
		user_id : 1065628228429845698,
	),
	owner_name : 'H1fosRG9OnwL5u20',
	owner_address : 'B3tSE1N9gsjZILJC',
	attributes : array(
		$client->starGiftAttributeModel(
			name : 'sN0WuTKzeircEfHw',
			document : $client->documentEmpty(
				id : 5282802490026322679,
			),
			rarity_permille : 86,
		),
		$client->starGiftAttributePattern(
			name : 'qtmJpoaPbn0KFviQ',
			document : $client->documentEmpty(
				id : 8877007090195774637,
			),
			rarity_permille : 57,
		),
		$client->starGiftAttributeBackdrop(
			name : 'JoMvl1D3dikqwybO',
			backdrop_id : 13,
			center_color : 27,
			edge_color : 80,
			pattern_color : 18,
			text_color : 72,
			rarity_permille : 99,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -7363558585226957413,
			),
			recipient_id : $client->peerUser(
				user_id : 5959577793212582702,
			),
			date : 20,
			message : $client->textWithEntities(
				text : 'EdagFVXTyuBp8x4G',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 75,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 98,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 24,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 64,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 63,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 92,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 18,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 50,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 10,
						language : 'LrG69OMgx7PmdRnt',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 18,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 66,
						user_id : 8058583962675718232,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 18,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 87,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 37,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 21,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 38,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 86,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 40,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 79,
						document_id : 3929460493413745734,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 35,
					),
				),
			),
		),
	),
	availability_issued : 21,
	availability_total : 91,
	gift_address : '6hw1fxGXHuyRabO3',
	resell_amount : array(
		$client->starsAmount(
			amount : 7950526000301200354,
			nanos : 15,
		),
		$client->starsTonAmount(
			amount : -1022536263596343758,
		),
	),
	released_by : $client->peerUser(
		user_id : 4593926926306483211,
	),
	value_amount : -8171429250853748653,
	value_currency : 'wV6HDGbBd0LNSOE2',
	theme_peer : $client->peerUser(
		user_id : 4798969731358524628,
	),
	peer_color : $client->peerColor(
		color : 66,
		background_emoji_id : 1360494785073230795,
	),
	host_id : $client->peerUser(
		user_id : 5327201519374567023,
	),
);
```