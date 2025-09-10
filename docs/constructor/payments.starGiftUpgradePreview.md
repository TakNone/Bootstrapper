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
			name : 'X0ChrvUB2Vmgosia',
			document : $client->documentEmpty(
				id : 5513164159831076295,
			),
			rarity_permille : 64,
		),
		$client->starGiftAttributePattern(
			name : '5pUnfDzSqu6jgbeL',
			document : $client->documentEmpty(
				id : 3883518862994761846,
			),
			rarity_permille : 31,
		),
		$client->starGiftAttributeBackdrop(
			name : 'JZCoOxPsuH5DGK3b',
			backdrop_id : 96,
			center_color : 78,
			edge_color : 70,
			pattern_color : 47,
			text_color : 81,
			rarity_permille : 35,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 6021932224305164750,
			),
			recipient_id : $client->peerUser(
				user_id : -1707871580013760966,
			),
			date : 98,
			message : $client->textWithEntities(
				text : '8yovcWpk3l4d60aw',
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