# payments.starGiftUpgradeAttributes

**Layer** : 222

```tl
payments.starGiftUpgradeAttributes#46c6e36f attributes:Vector<StarGiftAttribute> = payments.StarGiftUpgradeAttributes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>attributes</mark> | [`Vector<StarGiftAttribute>`](type/StarGiftAttribute) | NOTHING |

---

## Type

[payments.StarGiftUpgradeAttributes](type/payments.StarGiftUpgradeAttributes)

---

## Example

```php
$paymentsStarGiftUpgradeAttributes = $client->payments->starGiftUpgradeAttributes(
	attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : 'P1BplVukNoEKqX83',
			document : $client->documentEmpty(
				id : -8775881207430087252,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 37,
			),
		),
		$client->starGiftAttributePattern(
			name : '0ThB7a6PpxD4joi8',
			document : $client->documentEmpty(
				id : 330646357485524159,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 60,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'becyups1vJ6SPfUQ',
			backdrop_id : 60,
			center_color : 63,
			edge_color : 22,
			pattern_color : 11,
			text_color : 0,
			rarity : $client->starGiftAttributeRarity(
				permille : 66,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -7113509485916209621,
			),
			recipient_id : $client->peerUser(
				user_id : 119604487087543777,
			),
			date : 10,
			message : $client->textWithEntities(
				text : 'nMKBPCgIFZ4c3q1L',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 52,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 57,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 1,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 74,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 25,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 83,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 12,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 56,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 74,
						language : 'ZUR0ECyep5shAMcD',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 43,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 70,
						user_id : -1020624631539487282,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 60,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 45,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 72,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 78,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 59,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 87,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 52,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 89,
						document_id : 608663726918540794,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 87,
					),
				),
			),
		),
	),
);
```