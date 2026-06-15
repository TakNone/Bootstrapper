# payments.starGiftUpgradePreview

**Description** : *A preview of the possible attributes \(chosen randomly\) a gift &raquo; can receive after upgrading it to a collectible gift &raquo;, see here &raquo; for more info*

**Layer** : 227

```tl
payments.starGiftUpgradePreview#3de1dfed sample_attributes:Vector<StarGiftAttribute> prices:Vector<StarGiftUpgradePrice> next_prices:Vector<StarGiftUpgradePrice> = payments.StarGiftUpgradePreview;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sample_attributes</mark> | [`Vector<StarGiftAttribute>`](type/StarGiftAttribute) | Possible gift attributes |
| <mark>prices</mark> | [`Vector<StarGiftUpgradePrice>`](type/StarGiftUpgradePrice) | NOTHING |
| <mark>next_prices</mark> | [`Vector<StarGiftUpgradePrice>`](type/StarGiftUpgradePrice) | NOTHING |

---

## Type

[payments.StarGiftUpgradePreview](type/payments.StarGiftUpgradePreview)

---

## Example

```php
$paymentsStarGiftUpgradePreview = $client->payments->starGiftUpgradePreview(
	sample_attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : 'Ywog8mNxpPRJS4Zn',
			document : $client->documentEmpty(
				id : 3510445583416299180,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 88,
			),
		),
		$client->starGiftAttributePattern(
			name : 'eZL3i0lGTr7Jm5DE',
			document : $client->documentEmpty(
				id : -6101420003940739817,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 24,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : '2IWl4ewMipQVXNDx',
			backdrop_id : 84,
			center_color : 80,
			edge_color : 46,
			pattern_color : 2,
			text_color : 23,
			rarity : $client->starGiftAttributeRarity(
				permille : 83,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -3131928320927704614,
			),
			recipient_id : $client->peerUser(
				user_id : 1632059633650787281,
			),
			date : 78,
			message : $client->textWithEntities(
				text : '2jSwo81Aa9VvC3NM',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 21,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 86,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 12,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 75,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 14,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 25,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 30,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 95,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 41,
						language : '8Xload9MctYG7Zre',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 94,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 8,
						user_id : -9206305131278971327,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 90,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 7,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 92,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 81,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 74,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 88,
						document_id : -6555928787772290919,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 13,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 99,
						date : 72,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 72,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 90,
						old_text : 'j4felCZv5Fc7WTDG',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 29,
					),
				),
			),
		),
	),
	prices : array(
		$client->starGiftUpgradePrice(
			date : 72,
			upgrade_stars : -328184705953472126,
		),
	),
	next_prices : array(
		$client->starGiftUpgradePrice(
			date : 87,
			upgrade_stars : -2951638636909282394,
		),
	),
);
```