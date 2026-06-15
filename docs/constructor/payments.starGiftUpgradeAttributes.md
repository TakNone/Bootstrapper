# payments.starGiftUpgradeAttributes

**Layer** : 227

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
			name : 'UPHhSdIYZDtM3OEe',
			document : $client->documentEmpty(
				id : 6814360521105309232,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 73,
			),
		),
		$client->starGiftAttributePattern(
			name : 'GhTebimYaC3FdjSy',
			document : $client->documentEmpty(
				id : -5845243084207053524,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 81,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : '0MgnxYNti9uzQFDE',
			backdrop_id : 94,
			center_color : 14,
			edge_color : 81,
			pattern_color : 7,
			text_color : 89,
			rarity : $client->starGiftAttributeRarity(
				permille : 64,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 1760942320148632028,
			),
			recipient_id : $client->peerUser(
				user_id : -3891969228442807037,
			),
			date : 63,
			message : $client->textWithEntities(
				text : '4oXcd1FMQmr0kg8N',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 79,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 7,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 80,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 33,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 60,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 32,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 61,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 59,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 70,
						language : 'bJzHN5ouDfFgR0C1',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 63,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 75,
						user_id : -6552934256537512473,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 39,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 100,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 12,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 48,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 76,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 55,
						document_id : -6771867968487208427,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 4,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 41,
						date : 10,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 98,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 47,
						old_text : 'NoqW7A9HuQMeg3DX',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 32,
					),
				),
			),
		),
	),
);
```