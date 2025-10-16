# starGiftUnique

**Layer** : 216

```tl
starGiftUnique#b0bf741b flags:# require_premium:flags.6?true resale_ton_only:flags.7?true theme_available:flags.9?true id:long gift_id:long title:string slug:string num:int owner_id:flags.0?Peer owner_name:flags.1?string owner_address:flags.2?string attributes:Vector<StarGiftAttribute> availability_issued:int availability_total:int gift_address:flags.3?string resell_amount:flags.4?Vector<StarsAmount> released_by:flags.5?Peer value_amount:flags.8?long value_currency:flags.8?string theme_peer:flags.10?Peer peer_color:flags.11?PeerColor host_id:flags.12?Peer = StarGift;
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
	id : -3674322457060879146,
	gift_id : -4279093998679447468,
	title : 'MWdVqeKRQBP8HFv6',
	slug : '4ScXOs1NhlzrPa3M',
	num : 11,
	owner_id : $client->peerUser(
		user_id : -6174213684936828237,
	),
	owner_name : 'B7ZXd2boj3m0xy8E',
	owner_address : 'EM2tTcnClRPA6S9i',
	attributes : array(
		$client->starGiftAttributeModel(
			name : 'thnCKI7ZXk5AFPTv',
			document : $client->documentEmpty(
				id : 4855345194482725120,
			),
			rarity_permille : 99,
		),
		$client->starGiftAttributePattern(
			name : 'AKEg9NiHuy1UIY6k',
			document : $client->documentEmpty(
				id : 6954525423632512854,
			),
			rarity_permille : 22,
		),
		$client->starGiftAttributeBackdrop(
			name : 'w9QIlVqsCp80g3dx',
			backdrop_id : 87,
			center_color : 17,
			edge_color : 79,
			pattern_color : 82,
			text_color : 55,
			rarity_permille : 40,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -7490914361233310939,
			),
			recipient_id : $client->peerUser(
				user_id : -3625441687959087888,
			),
			date : 77,
			message : $client->textWithEntities(
				text : 'zhTsW7KqOI350DoM',
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
	availability_issued : 18,
	availability_total : 35,
	gift_address : 'xEqkF1mCjK5iRXHL',
	resell_amount : array(
		$client->starsAmount(
			amount : 1438328474225886311,
			nanos : 31,
		),
		$client->starsTonAmount(
			amount : 6501411342866879343,
		),
	),
	released_by : $client->peerUser(
		user_id : -6277498836681361218,
	),
	value_amount : 8938658148667774945,
	value_currency : 'l2RrPXOzL8wxGfpH',
	theme_peer : $client->peerUser(
		user_id : -7917557113634102592,
	),
	peer_color : $client->peerColor(
		color : 96,
		background_emoji_id : 6941287539171300015,
	),
	host_id : $client->peerUser(
		user_id : -5494710137089458830,
	),
);
```