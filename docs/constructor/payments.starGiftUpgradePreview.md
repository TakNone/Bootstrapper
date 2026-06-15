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
			name : '3ZaNOlwjAFtRX9Wn',
			document : $client->documentEmpty(
				id : -5793954294952412936,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 52,
			),
		),
		$client->starGiftAttributePattern(
			name : 'zQjCcJL2nTmhxV6I',
			document : $client->documentEmpty(
				id : 3825162898116135725,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 13,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'C9Y8WoFIXsmABLDa',
			backdrop_id : 87,
			center_color : 76,
			edge_color : 35,
			pattern_color : 99,
			text_color : 18,
			rarity : $client->starGiftAttributeRarity(
				permille : 49,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -276190276774623443,
			),
			recipient_id : $client->peerUser(
				user_id : -6829061419288482996,
			),
			date : 43,
			message : $client->textWithEntities(
				text : 'YiNwnpexlvI65KaH',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 30,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 91,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 25,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 19,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 8,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 27,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 98,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 9,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 13,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 6,
						language : 'U9R7TnzCjSBdgloW',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 99,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 43,
						user_id : -2904685420931501446,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 3,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 85,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 25,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 79,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 17,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 45,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 47,
						document_id : 1565099508829222034,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 46,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 52,
						date : 17,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 81,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 3,
						old_text : 'hWkDLwSfrlFHtuAd',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 90,
					),
				),
			),
		),
	),
	prices : array(
		$client->starGiftUpgradePrice(
			date : 15,
			upgrade_stars : 8827937582326432557,
		),
	),
	next_prices : array(
		$client->starGiftUpgradePrice(
			date : 24,
			upgrade_stars : -1823007393205920070,
		),
	),
);
```