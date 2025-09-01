# payments.starGiftUpgradePreview

**Layer** : 214

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
			name : 'dGEwsZWXCtQxmPKI',
			document : $client->documentEmpty(
				id : 6350953327801917874,
			),
			rarity_permille : 83,
		),
		$client->starGiftAttributePattern(
			name : 'jBxvqiLIP80zeaEd',
			document : $client->documentEmpty(
				id : -7006370453025329607,
			),
			rarity_permille : 86,
		),
		$client->starGiftAttributeBackdrop(
			name : 'dsH6D28xZrzvElyV',
			backdrop_id : 67,
			center_color : 47,
			edge_color : 86,
			pattern_color : 49,
			text_color : 80,
			rarity_permille : 35,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -2821932601293895224,
			),
			recipient_id : $client->peerUser(
				user_id : -6394349356277837761,
			),
			date : 16,
			message : $client->textWithEntities(
				text : 'BrWJKcpzPj6Uas2q',
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