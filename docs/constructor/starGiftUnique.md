# starGiftUnique

**Layer** : 214

```tl
starGiftUnique#1befe865 flags:# require_premium:flags.6?true resale_ton_only:flags.7?true theme_available:flags.9?true id:long gift_id:long title:string slug:string num:int owner_id:flags.0?Peer owner_name:flags.1?string owner_address:flags.2?string attributes:Vector<StarGiftAttribute> availability_issued:int availability_total:int gift_address:flags.3?string resell_amount:flags.4?Vector<StarsAmount> released_by:flags.5?Peer value_amount:flags.8?long value_currency:flags.8?string theme_peer:flags.10?Peer = StarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **require_premium** | [`flags.6?true`](type/true) | NOTHING |
| **resale_ton_only** | [`flags.7?true`](type/true) | NOTHING |
| **theme_available** | [`flags.9?true`](type/true) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | NOTHING |
| <mark>gift_id</mark> | [`long`](type/long) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |
| <mark>slug</mark> | [`string`](type/string) | NOTHING |
| <mark>num</mark> | [`int`](type/int) | NOTHING |
| **owner_id** | [`flags.0?Peer`](type/Peer) | NOTHING |
| **owner_name** | [`flags.1?string`](type/string) | NOTHING |
| **owner_address** | [`flags.2?string`](type/string) | NOTHING |
| <mark>attributes</mark> | [`Vector<StarGiftAttribute>`](type/StarGiftAttribute) | NOTHING |
| <mark>availability_issued</mark> | [`int`](type/int) | NOTHING |
| <mark>availability_total</mark> | [`int`](type/int) | NOTHING |
| **gift_address** | [`flags.3?string`](type/string) | NOTHING |
| **resell_amount** | [`flags.4?Vector<StarsAmount>`](type/StarsAmount) | NOTHING |
| **released_by** | [`flags.5?Peer`](type/Peer) | NOTHING |
| **value_amount** | [`flags.8?long`](type/long) | NOTHING |
| **value_currency** | [`flags.8?string`](type/string) | NOTHING |
| **theme_peer** | [`flags.10?Peer`](type/Peer) | NOTHING |

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
	id : 2117897365670318839,
	gift_id : -9073757116170930751,
	title : '7fqS1evVOpEmHgPC',
	slug : '4DfZpU0odtE2IzwJ',
	num : 84,
	owner_id : $client->peerUser(
		user_id : 6001948535044926383,
	),
	owner_name : 'GRbDyENzHTKePl3o',
	owner_address : 'nzMBVQYAeGbHNISX',
	attributes : array(
		$client->starGiftAttributeModel(
			name : '0zPxcVS7YqrDepo3',
			document : $client->documentEmpty(
				id : 4159679369807967046,
			),
			rarity_permille : 69,
		),
		$client->starGiftAttributePattern(
			name : 'i0conTRQC9hEkK6N',
			document : $client->documentEmpty(
				id : 462368935527911793,
			),
			rarity_permille : 5,
		),
		$client->starGiftAttributeBackdrop(
			name : 'bLpJ7nhDqjYZRVHK',
			backdrop_id : 84,
			center_color : 32,
			edge_color : 48,
			pattern_color : 95,
			text_color : 43,
			rarity_permille : 41,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -7196844407324824854,
			),
			recipient_id : $client->peerUser(
				user_id : 5927856397471570766,
			),
			date : 53,
			message : $client->textWithEntities(
				text : 'JHUcCGQWzI2tk8dM',
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
	availability_issued : 89,
	availability_total : 15,
	gift_address : 'IfLYEGunSlFhQ1Pp',
	resell_amount : array(
		$client->starsAmount(
			amount : -1902778124972607394,
			nanos : 10,
		),
		$client->starsTonAmount(
			amount : -2412835380015600059,
		),
	),
	released_by : $client->peerUser(
		user_id : 7729581925079251150,
	),
	value_amount : 8295538998156063576,
	value_currency : 'F3kZd7JuGPotemX8',
	theme_peer : $client->peerUser(
		user_id : -7310737444349320262,
	),
);
```