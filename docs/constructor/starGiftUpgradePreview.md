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
			name : 'Zcoan5LeKR7DqmvP',
			document : $client->documentEmpty(
				id : -8033620609815785462,
			),
			rarity_permille : 20,
		),
		$client->starGiftAttributePattern(
			name : 'jASnX3GWHPR9KbmD',
			document : $client->documentEmpty(
				id : -8391490142227370358,
			),
			rarity_permille : 9,
		),
		$client->starGiftAttributeBackdrop(
			name : 'SzHhaj4L7prNxYvw',
			backdrop_id : 83,
			center_color : 84,
			edge_color : 45,
			pattern_color : 54,
			text_color : 89,
			rarity_permille : 70,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -8806941101062566708,
			),
			recipient_id : $client->peerUser(
				user_id : -3185563058458905301,
			),
			date : 46,
			message : $client->textWithEntities(
				text : 'DjB0bELtAVHXJ9Pg',
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
			date : 8,
			upgrade_stars : 3424190871663202794,
		),
	),
	next_prices : array(
		$client->starGiftUpgradePrice(
			date : 66,
			upgrade_stars : -2775507613774007948,
		),
	),
);
```