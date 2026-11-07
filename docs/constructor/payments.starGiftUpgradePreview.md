# payments.starGiftUpgradePreview

**Description** : *A preview of the possible attributes \(chosen randomly\) a gift &raquo; can receive after upgrading it to a collectible gift &raquo;, see here &raquo; for more info*

**Layer** : 233

```tl
payments.starGiftUpgradePreview#3de1dfed sample_attributes:Vector<StarGiftAttribute> prices:Vector<StarGiftUpgradePrice> next_prices:Vector<StarGiftUpgradePrice> = payments.StarGiftUpgradePreview;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sample_attributes</mark> | [`Vector<StarGiftAttribute>`](type/StarGiftAttribute) | Possible gift attributes |
| <mark>prices</mark> | [`Vector<StarGiftUpgradePrice>`](type/StarGiftUpgradePrice) | Contains a similar list of upgrade prices and timestamps, not as granular as in next_prices (i.e. prices are approximately 1 month apart), to be used mainly to scale the price graph, and to show a more general future overview of the upgrade price |
| <mark>next_prices</mark> | [`Vector<StarGiftUpgradePrice>`](type/StarGiftUpgradePrice) | Contains the current upgrade price and a list of future prices, each associated to a UNIX timestamp that indicates when the price comes in effect (the current price is valid only until the next one comes into effect, and so on for all prices in the list) |

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
			name : 'qlAzwpPDhtbSVfJN',
			document : $client->documentEmpty(
				id : -1610583841914157266,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 41,
			),
		),
		$client->starGiftAttributePattern(
			name : 'kKiAnPEqLZwWxs5Y',
			document : $client->documentEmpty(
				id : 2410444663905554917,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 57,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'eRmMhILnkJQl39vb',
			backdrop_id : 46,
			center_color : 37,
			edge_color : 76,
			pattern_color : 14,
			text_color : 51,
			rarity : $client->starGiftAttributeRarity(
				permille : 62,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -8895779372993200345,
			),
			recipient_id : $client->peerUser(
				user_id : -7532336654795893802,
			),
			date : 6,
			message : $client->textWithEntities(
				text : 'hN0y1Kn3uUYBOqGA',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 78,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 2,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 40,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 57,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 68,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 51,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 9,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 44,
						language : 'QfOKhkZ43DLcAIey',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 95,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 95,
						user_id : 3185613953473084111,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 58,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 77,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 17,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 1,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 11,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 69,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 90,
						document_id : 4239393068024320036,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 99,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 44,
						date : 60,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 92,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 99,
						old_text : 'QHXhkzidUcy46O0J',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 90,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 69,
					),
				),
			),
		),
	),
	prices : array(
		$client->starGiftUpgradePrice(
			date : 73,
			upgrade_stars : 3219991246537622393,
		),
	),
	next_prices : array(
		$client->starGiftUpgradePrice(
			date : 48,
			upgrade_stars : -4202399115224229429,
		),
	),
);
```