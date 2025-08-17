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
	id : -1666459501403786936,
	title : 'lvhKSjwbY5TUcXQ3',
	slug : 'EXpyZKjfD5IeTGBQ',
	num : 48,
	owner_id : $client->peerUser(
		user_id : 4499061017986418685,
	),
	owner_name : '6gl0IpSVJQ2DPhX5',
	owner_address : 'WtcBbNVgML9Sp7ET',
	attributes : array(
		$client->starGiftAttributeModel(
			name : '1EBU3S4OMvfCb7wj',
			document : $client->documentEmpty(
				id : -1691479462346081998,
			),
			rarity_permille : 21,
		),
		$client->starGiftAttributePattern(
			name : 'Vhm1t60ZxIBNS3gU',
			document : $client->documentEmpty(
				id : -3426867839250603033,
			),
			rarity_permille : 50,
		),
		$client->starGiftAttributeBackdrop(
			name : '5A8jo40N6IwkyvM2',
			backdrop_id : 54,
			center_color : 49,
			edge_color : 85,
			pattern_color : 88,
			text_color : 47,
			rarity_permille : 52,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -2243261265027659299,
			),
			recipient_id : $client->peerUser(
				user_id : -2526293021963688106,
			),
			date : 62,
			message : $client->textWithEntities(
				text : '2OLxT18wBd5Vn6m9',
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
	availability_issued : 84,
	availability_total : 7,
	gift_address : 'dq34v1oeQWJbTaB0',
	resell_amount : array(
		$client->starsAmount(
			amount : 5538737631877657790,
			nanos : 35,
		),
		$client->starsTonAmount(
			amount : 6928628687818232265,
		),
	),
	released_by : $client->peerUser(
		user_id : 593780128246529443,
	),
);
```