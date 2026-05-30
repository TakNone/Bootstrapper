# payments.starGiftUpgradeAttributes

**Layer** : 225

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
			name : 'KG1xEHUlVdwzqhFy',
			document : $client->documentEmpty(
				id : 7908119810648888180,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 87,
			),
		),
		$client->starGiftAttributePattern(
			name : 'kfZWFKdmzvyG53oc',
			document : $client->documentEmpty(
				id : 6946373605883223305,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 49,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'Z80WSlDAj9GJePY1',
			backdrop_id : 21,
			center_color : 66,
			edge_color : 82,
			pattern_color : 25,
			text_color : 52,
			rarity : $client->starGiftAttributeRarity(
				permille : 69,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -6763272995229444724,
			),
			recipient_id : $client->peerUser(
				user_id : -4400032558019781670,
			),
			date : 46,
			message : $client->textWithEntities(
				text : 'iSVJs7NYfMv5Q4k0',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 27,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 83,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 89,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 7,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 0,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 49,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 75,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 94,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 82,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 20,
						language : 'riGcTJvez7PR9sq3',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 41,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 66,
						user_id : -2523302903339516239,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 86,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 74,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 95,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 50,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 30,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 95,
						document_id : -6184905265159867040,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 25,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 54,
						date : 1,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 96,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 40,
						old_text : 'mDqjnB5slFN8OgJE',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 92,
					),
				),
			),
		),
	),
);
```