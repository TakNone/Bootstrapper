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
			name : 'pC4tinOQZdq9UjlK',
			document : $client->documentEmpty(
				id : -6440316937159470259,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 100,
			),
		),
		$client->starGiftAttributePattern(
			name : '1foAJ8whaQlCZrMF',
			document : $client->documentEmpty(
				id : 1491228550595525609,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 99,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : '5yWj8YfOpeQFovPh',
			backdrop_id : 76,
			center_color : 78,
			edge_color : 67,
			pattern_color : 64,
			text_color : 75,
			rarity : $client->starGiftAttributeRarity(
				permille : 98,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 5439783478807704239,
			),
			recipient_id : $client->peerUser(
				user_id : -8249946068266870244,
			),
			date : 0,
			message : $client->textWithEntities(
				text : '0nb98LdI7WNaoAKU',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 22,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 9,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 3,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 40,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 52,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 25,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 0,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 14,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 99,
						language : 'DjwO8miLeINAlEgu',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 85,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 38,
						user_id : 8386885681071317775,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 55,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 61,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 60,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 12,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 68,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 54,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 68,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 61,
						document_id : -7581709120494818048,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 82,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 73,
						date : 47,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 16,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 6,
						old_text : 'GfocN2VKQySaBHOk',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 30,
					),
				),
			),
		),
	),
);
```