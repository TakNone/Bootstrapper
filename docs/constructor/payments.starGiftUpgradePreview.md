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
			name : 'NQCcXqxlS1LeWz7E',
			document : $client->documentEmpty(
				id : -2041976333682116238,
			),
			rarity_permille : 79,
		),
		$client->starGiftAttributePattern(
			name : 'fvN4tEMygQX3jBpu',
			document : $client->documentEmpty(
				id : -7096001607870716247,
			),
			rarity_permille : 89,
		),
		$client->starGiftAttributeBackdrop(
			name : '70kSsrGL1UdNmIJ8',
			backdrop_id : 36,
			center_color : 22,
			edge_color : 86,
			pattern_color : 78,
			text_color : 100,
			rarity_permille : 59,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 8650160199528136987,
			),
			recipient_id : $client->peerUser(
				user_id : -4825814501592801080,
			),
			date : 5,
			message : $client->textWithEntities(
				text : 'NEem43g69Kz8DTds',
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