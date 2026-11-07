# payments.starGiftUpgradeAttributes

**Description** : *List of just the collectible attributes that may appear for a gift type once it&#039;s upgraded to a collectible gift &raquo;*

**Layer** : 233

```tl
payments.starGiftUpgradeAttributes#46c6e36f attributes:Vector<StarGiftAttribute> = payments.StarGiftUpgradeAttributes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>attributes</mark> | [`Vector<StarGiftAttribute>`](type/StarGiftAttribute) | Full list of possible attributes that may be assigned when gifts of the specified type are turned into collectible gifts », including craft-only models marked with starGiftAttributeModel.crafted |

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
			name : '4b7VEP2ts3kimzhG',
			document : $client->documentEmpty(
				id : -4585950559074597484,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 13,
			),
		),
		$client->starGiftAttributePattern(
			name : 'K8YlnjeD93gCxrhv',
			document : $client->documentEmpty(
				id : 8643287286947894074,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 2,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'zNjyi0XOcUqtWKGw',
			backdrop_id : 20,
			center_color : 97,
			edge_color : 49,
			pattern_color : 48,
			text_color : 85,
			rarity : $client->starGiftAttributeRarity(
				permille : 53,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -239249789184084993,
			),
			recipient_id : $client->peerUser(
				user_id : 3213786079912679125,
			),
			date : 85,
			message : $client->textWithEntities(
				text : 'd6zwQ85oBWOYaFPM',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 14,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 80,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 25,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 8,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 23,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 26,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 19,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 50,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 3,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 35,
						language : 'Tq5GDxFBcrIZkmfw',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 23,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 52,
						user_id : 8800896329762946948,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 0,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 38,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 50,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 71,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 42,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 55,
						document_id : 5344125765663276032,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 19,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 0,
						date : 86,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 64,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 84,
						old_text : 'SDlT9y1Qjqe6cud3',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 15,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 8,
					),
				),
			),
		),
	),
);
```