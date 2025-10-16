# starGiftUnique

**Description** : *Represents a collectible star gift, see here &raquo; for more info*

**Layer** : 216

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
	id : -2813016568650444421,
	gift_id : -6519514843317982718,
	title : 'tZ6N2AJaOvp7nRb9',
	slug : 'Dq6kTevBfhCnwcY9',
	num : 52,
	owner_id : $client->peerUser(
		user_id : 6044060224063427738,
	),
	owner_name : 'zu5JGvVTmaO0hwxN',
	owner_address : '0VwMC8ZmozbUrGES',
	attributes : array(
		$client->starGiftAttributeModel(
			name : 'ZdxGYgMumzCKjFNR',
			document : $client->documentEmpty(
				id : -2871595795552003623,
			),
			rarity_permille : 1,
		),
		$client->starGiftAttributePattern(
			name : 'aQiZFBwRXHoMd5lS',
			document : $client->documentEmpty(
				id : 1460379262337510441,
			),
			rarity_permille : 28,
		),
		$client->starGiftAttributeBackdrop(
			name : 'tG9R6rA5JUDxEgWd',
			backdrop_id : 6,
			center_color : 49,
			edge_color : 5,
			pattern_color : 49,
			text_color : 14,
			rarity_permille : 82,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 5979149177647622840,
			),
			recipient_id : $client->peerUser(
				user_id : 4484902123408188975,
			),
			date : 5,
			message : $client->textWithEntities(
				text : 'TroEOtcRyP7LsWC2',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
	),
	availability_issued : 14,
	availability_total : 88,
	gift_address : 'FLvbOhSmTceqz1Wt',
	resell_amount : array(
		$client->starsAmount(
			amount : 1175787889753591894,
			nanos : 21,
		),
		$client->starsTonAmount(
			amount : -6090305230346321640,
		),
	),
	released_by : $client->peerUser(
		user_id : 1421217042268179208,
	),
	value_amount : 1075097319725643558,
	value_currency : 'sqJtcehwGzrvnVIA',
	theme_peer : $client->peerUser(
		user_id : 3300262211856309214,
	),
	peer_color : $client->peerColor(
		color : 9,
		background_emoji_id : -7615623092456698211,
	),
	host_id : $client->peerUser(
		user_id : 6536450218864108458,
	),
);
```