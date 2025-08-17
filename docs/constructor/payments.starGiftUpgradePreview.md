# payments.starGiftUpgradePreview

**Layer** : 211

```tl
payments.starGiftUpgradePreview#167bd90b sample_attributes:Vector<StarGiftAttribute> = payments.StarGiftUpgradePreview;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sample_attributes</mark> | [`Vector<StarGiftAttribute>`](type/StarGiftAttribute) | NOTHING |

---

## Type

[payments.StarGiftUpgradePreview](type/payments.StarGiftUpgradePreview)

---

## Example

```php
$paymentsStarGiftUpgradePreview = $client->payments->starGiftUpgradePreview(
	sample_attributes : array(
		$client->starGiftAttributeModel(
			name : '9pPLVXn5eausmTjO',
			document : $client->documentEmpty(
				id : -3860082002961953305,
			),
			rarity_permille : 75,
		),
		$client->starGiftAttributePattern(
			name : 'FvcZk1pSCg9tP7BG',
			document : $client->documentEmpty(
				id : -7647164911414144708,
			),
			rarity_permille : 37,
		),
		$client->starGiftAttributeBackdrop(
			name : 'AVEHLciI2pPRsJT9',
			backdrop_id : 94,
			center_color : 77,
			edge_color : 9,
			pattern_color : 66,
			text_color : 98,
			rarity_permille : 97,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 899195737048912267,
			),
			recipient_id : $client->peerUser(
				user_id : 8648844731415688089,
			),
			date : 43,
			message : $client->textWithEntities(
				text : 'WNz5d1VhlgO3se8D',
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
);
```