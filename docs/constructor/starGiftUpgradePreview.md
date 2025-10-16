# starGiftUpgradePreview

**Layer** : 216

```tl
starGiftUpgradePreview#3de1dfed sample_attributes:Vector<StarGiftAttribute> prices:Vector<StarGiftUpgradePrice> next_prices:Vector<StarGiftUpgradePrice> = StarGiftUpgradePreview;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sample_attributes</mark> | [`Vector<StarGiftAttribute>`](type/StarGiftAttribute) | NOTHING |
| <mark>prices</mark> | [`Vector<StarGiftUpgradePrice>`](type/StarGiftUpgradePrice) | NOTHING |
| <mark>next_prices</mark> | [`Vector<StarGiftUpgradePrice>`](type/StarGiftUpgradePrice) | NOTHING |

---

## Type

[StarGiftUpgradePreview](type/StarGiftUpgradePreview)

---

## Example

```php
$starGiftUpgradePreview = $client->starGiftUpgradePreview(
	sample_attributes : array(
		$client->starGiftAttributeModel(
			name : 'WqeMDZzwAB9ifoF6',
			document : $client->documentEmpty(
				id : 6637656751227092168,
			),
			rarity_permille : 33,
		),
		$client->starGiftAttributePattern(
			name : 'BEj86LKe5QvzYkyo',
			document : $client->documentEmpty(
				id : 1898031409512160506,
			),
			rarity_permille : 83,
		),
		$client->starGiftAttributeBackdrop(
			name : 'l0ZQDWFYxmsu9H4b',
			backdrop_id : 77,
			center_color : 9,
			edge_color : 4,
			pattern_color : 11,
			text_color : 94,
			rarity_permille : 48,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 7480279811547790306,
			),
			recipient_id : $client->peerUser(
				user_id : -6762093613319831663,
			),
			date : 68,
			message : $client->textWithEntities(
				text : 'gX2rMPL4AdFQ0EjJ',
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
	prices : array(
		$client->starGiftUpgradePrice(
			date : 56,
			upgrade_stars : 7694781493184058915,
		),
	),
	next_prices : array(
		$client->starGiftUpgradePrice(
			date : 60,
			upgrade_stars : 3028448166924809280,
		),
	),
);
```