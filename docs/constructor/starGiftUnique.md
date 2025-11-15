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
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 1797068118246992383,
	gift_id : 536673556696667188,
	title : 'KBWfQOqVtFU4GlLi',
	slug : 'IjKFWntg5YTZMxOE',
	num : 50,
	owner_id : $client->peerUser(
		user_id : -1711983415617348996,
	),
	owner_name : 'JAYvadL54Npz6r7C',
	owner_address : 'wSQmF2HM0EinuoAt',
	attributes : array(
		$client->starGiftAttributeModel(
			name : 'H7RfzIhMY1OgPyZk',
			document : $client->documentEmpty(
				id : -6052191442349568355,
			),
			rarity_permille : 20,
		),
		$client->starGiftAttributePattern(
			name : 'pdH83VygJmf2RWqw',
			document : $client->documentEmpty(
				id : 3500748915781540442,
			),
			rarity_permille : 88,
		),
		$client->starGiftAttributeBackdrop(
			name : 'r2qsW15RfinXemyg',
			backdrop_id : 28,
			center_color : 28,
			edge_color : 26,
			pattern_color : 29,
			text_color : 92,
			rarity_permille : 85,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 731249028893473207,
			),
			recipient_id : $client->peerUser(
				user_id : 284766575612956920,
			),
			date : 36,
			message : $client->textWithEntities(
				text : 'utzCcIS19FUgmYP4',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 46,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 53,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 100,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 29,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 61,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 36,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 95,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 74,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 8,
						language : 'BbRFVZi7T0nXKrop',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 84,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 32,
						user_id : -4321035568253623319,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 64,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 1,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 40,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 9,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 59,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 73,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 100,
						document_id : -704505883805055612,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 87,
					),
				),
			),
		),
	),
	availability_issued : 49,
	availability_total : 75,
	gift_address : 'unjB1TOMQbar09ih',
	resell_amount : array(
		$client->starsAmount(
			amount : 6703762785101940817,
			nanos : 32,
		),
		$client->starsTonAmount(
			amount : -961704418871766860,
		),
	),
	released_by : $client->peerUser(
		user_id : -181062135347090279,
	),
	value_amount : -2123619769156822864,
	value_currency : 'FQLvHG1D7BZfI60E',
	theme_peer : $client->peerUser(
		user_id : 2738616847456430737,
	),
	peer_color : $client->peerColor(
		color : 12,
		background_emoji_id : -7356831373422491555,
	),
	host_id : $client->peerUser(
		user_id : 7900570091446613576,
	),
);
```