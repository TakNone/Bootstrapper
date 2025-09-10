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
	id : -7376121680269845818,
	gift_id : -1249933632765176491,
	title : '7XCUnxaRmM1QjAwh',
	slug : 'I5NKhac3LBbjXEvi',
	num : 56,
	owner_id : $client->peerUser(
		user_id : 5963282668031329701,
	),
	owner_name : 'uyCwq0soaF3cvApK',
	owner_address : 'OrAudGe9sctEafJl',
	attributes : array(
		$client->starGiftAttributeModel(
			name : '9fiLVYNydWUFAEjq',
			document : $client->documentEmpty(
				id : -3751907880743223479,
			),
			rarity_permille : 33,
		),
		$client->starGiftAttributePattern(
			name : 'UFrWiOkpbJe130jN',
			document : $client->documentEmpty(
				id : -6337341430809029607,
			),
			rarity_permille : 2,
		),
		$client->starGiftAttributeBackdrop(
			name : 'o04Xqr6T3hAjlteR',
			backdrop_id : 84,
			center_color : 33,
			edge_color : 4,
			pattern_color : 47,
			text_color : 50,
			rarity_permille : 24,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 1050683063292483461,
			),
			recipient_id : $client->peerUser(
				user_id : 5945466068792699047,
			),
			date : 32,
			message : $client->textWithEntities(
				text : '7faZYyTvcs3FWKC6',
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
	availability_total : 36,
	gift_address : '8JgnXwQbTt6GqVEP',
	resell_amount : array(
		$client->starsAmount(
			amount : -7270868599952686308,
			nanos : 80,
		),
		$client->starsTonAmount(
			amount : -6945307770483613952,
		),
	),
	released_by : $client->peerUser(
		user_id : -3585542909482672670,
	),
	value_amount : -7780130358882615801,
	value_currency : 'o1iSVZpg4JlmO0kb',
	theme_peer : $client->peerUser(
		user_id : -6944790636241580145,
	),
);
```