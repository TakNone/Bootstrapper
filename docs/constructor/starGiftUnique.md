# starGiftUnique

**Layer** : 211

```tl
starGiftUnique#3a274d50 flags:# require_premium:flags.6?true resale_ton_only:flags.7?true id:long title:string slug:string num:int owner_id:flags.0?Peer owner_name:flags.1?string owner_address:flags.2?string attributes:Vector<StarGiftAttribute> availability_issued:int availability_total:int gift_address:flags.3?string resell_amount:flags.4?Vector<StarsAmount> released_by:flags.5?Peer = StarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **require_premium** | [`flags.6?true`](type/true) | NOTHING |
| **resale_ton_only** | [`flags.7?true`](type/true) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | NOTHING |
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

---

## Type

[StarGift](type/StarGift)

---

## Example

```php
$starGift = $client->starGiftUnique(
	require_premium : true,
	resale_ton_only : true,
	id : -4622955905806273281,
	title : 'A9S5Noc3CKvTFljZ',
	slug : 'oIH9CVlvAqTukiat',
	num : 91,
	owner_id : $client->peerUser(
		user_id : -8115949490502223459,
	),
	owner_name : 'GPAC5HXbghs0ywIp',
	owner_address : 'yj3Q8sULxr4RoWzm',
	attributes : array(
		$client->starGiftAttributeModel(
			name : 'sIuTLAfyEnkhQGV1',
			document : $client->documentEmpty(
				id : -5380629663440896744,
			),
			rarity_permille : 56,
		),
		$client->starGiftAttributePattern(
			name : 'ew9B5K7xzpovPJmA',
			document : $client->documentEmpty(
				id : 4197706081267959583,
			),
			rarity_permille : 84,
		),
		$client->starGiftAttributeBackdrop(
			name : 'Jhcejm9Sfu824pRY',
			backdrop_id : 83,
			center_color : 58,
			edge_color : 88,
			pattern_color : 20,
			text_color : 86,
			rarity_permille : 90,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -1889685944314268039,
			),
			recipient_id : $client->peerUser(
				user_id : 7405860751242565887,
			),
			date : 29,
			message : $client->textWithEntities(
				text : 'OYLfyloeTdpcXHix',
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
	availability_issued : 7,
	availability_total : 94,
	gift_address : 'W4gJhGfnBZc8xqtv',
	resell_amount : array(
		$client->starsAmount(
			amount : -4959337683573019477,
			nanos : 49,
		),
		$client->starsTonAmount(
			amount : -7206356426031849577,
		),
	),
	released_by : $client->peerUser(
		user_id : 1212867475167061256,
	),
);
```