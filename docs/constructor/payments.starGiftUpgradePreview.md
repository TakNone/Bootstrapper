# payments.starGiftUpgradePreview

**Layer** : 216

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
			name : 'DEKoYPQv2HzOJBGd',
			document : $client->documentEmpty(
				id : -4853886350807191167,
			),
			rarity_permille : 47,
		),
		$client->starGiftAttributePattern(
			name : 'qAvWIMoVslJBRYT3',
			document : $client->documentEmpty(
				id : -3797046191147736890,
			),
			rarity_permille : 51,
		),
		$client->starGiftAttributeBackdrop(
			name : 'GlPDwmJnxXMhCt28',
			backdrop_id : 16,
			center_color : 4,
			edge_color : 40,
			pattern_color : 93,
			text_color : 17,
			rarity_permille : 52,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 6259400258283118064,
			),
			recipient_id : $client->peerUser(
				user_id : -8068334611912552336,
			),
			date : 2,
			message : $client->textWithEntities(
				text : 'cN8EmyadfjsiYHCQ',
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