# payments.starGiftUpgradePreview

**Description** : *A preview of the possible attributes \(chosen randomly\) a gift &raquo; can receive after upgrading it to a collectible gift &raquo;, see here &raquo; for more info*

**Layer** : 216

```tl
payments.starGiftUpgradePreview#167bd90b sample_attributes:Vector<StarGiftAttribute> = payments.StarGiftUpgradePreview;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sample_attributes</mark> | [`Vector<StarGiftAttribute>`](type/StarGiftAttribute) | Possible gift attributes |

---

## Type

[payments.StarGiftUpgradePreview](type/payments.StarGiftUpgradePreview)

---

## Example

```php
$paymentsStarGiftUpgradePreview = $client->payments->starGiftUpgradePreview(
	sample_attributes : array(
		$client->starGiftAttributeModel(
			name : 'M35aSRENteljFp4A',
			document : $client->documentEmpty(
				id : -8884390753666408010,
			),
			rarity_permille : 98,
		),
		$client->starGiftAttributePattern(
			name : '5u1soDzaiFXwvm0E',
			document : $client->documentEmpty(
				id : 247173365048280198,
			),
			rarity_permille : 72,
		),
		$client->starGiftAttributeBackdrop(
			name : 'GXoatxJjV5mpDCE3',
			backdrop_id : 13,
			center_color : 0,
			edge_color : 57,
			pattern_color : 8,
			text_color : 17,
			rarity_permille : 67,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -8474001015400813613,
			),
			recipient_id : $client->peerUser(
				user_id : -8674245988214606007,
			),
			date : 11,
			message : $client->textWithEntities(
				text : 'lg9KWv8QtGkCb3SE',
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