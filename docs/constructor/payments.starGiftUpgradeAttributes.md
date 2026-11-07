# payments.starGiftUpgradeAttributes

**Description** : *List of just the collectible attributes that may appear for a gift type once it&#039;s upgraded to a collectible gift &raquo;*

**Layer** : 229

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
			name : 'VqeT9WKhQJp2rEOg',
			document : $client->documentEmpty(
				id : -7522515788158858368,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 49,
			),
		),
		$client->starGiftAttributePattern(
			name : 'wvhPj5pnTVe6Xcdb',
			document : $client->documentEmpty(
				id : 2655674134100661562,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 61,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : '28eBC7nOHloiGYdQ',
			backdrop_id : 79,
			center_color : 44,
			edge_color : 9,
			pattern_color : 5,
			text_color : 39,
			rarity : $client->starGiftAttributeRarity(
				permille : 70,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -7867894179800496941,
			),
			recipient_id : $client->peerUser(
				user_id : 8656964103392937554,
			),
			date : 16,
			message : $client->textWithEntities(
				text : '8j1bouL4NlDJA9XY',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 82,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 73,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 0,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 20,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 21,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 32,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 57,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 8,
						language : 'fteVpza0NmgY4uTj',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 43,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 62,
						user_id : 2337496812437749542,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 36,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 55,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 13,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 12,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 55,
						document_id : -6506631765842939823,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 21,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 67,
						date : 98,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 38,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 80,
						old_text : 'EL6n8cvUGkSxsioO',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 80,
					),
				),
			),
		),
	),
);
```