# payments.starGiftUpgradePreview

**Description** : *A preview of the possible attributes \(chosen randomly\) a gift &raquo; can receive after upgrading it to a collectible gift &raquo;, see here &raquo; for more info*

**Layer** : 229

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
			name : 'aK90VsFwOqGpiUdZ',
			document : $client->documentEmpty(
				id : -4453227350485723405,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 92,
			),
		),
		$client->starGiftAttributePattern(
			name : 'O8RSQHGXejJ1iMq7',
			document : $client->documentEmpty(
				id : -5915730848112378027,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 7,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'FYwJbnPrvdzZBl6G',
			backdrop_id : 91,
			center_color : 42,
			edge_color : 25,
			pattern_color : 30,
			text_color : 19,
			rarity : $client->starGiftAttributeRarity(
				permille : 76,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 3660801824702206705,
			),
			recipient_id : $client->peerUser(
				user_id : -2222438717358071644,
			),
			date : 74,
			message : $client->textWithEntities(
				text : 'A7XBkIutO6ZxLNGr',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 24,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 76,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 62,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 100,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 11,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 57,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 9,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 88,
						language : 'RKUNiDCEc9l4y27r',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 52,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 13,
						user_id : -5625509814593211977,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 75,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 4,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 87,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 99,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 5,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 24,
						document_id : -841083705119210396,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 70,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 5,
						date : 54,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 51,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 41,
						old_text : 'DvcV71gEHynF5dkN',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 59,
					),
				),
			),
		),
	),
	prices : array(
		$client->starGiftUpgradePrice(
			date : 38,
			upgrade_stars : 3488552628859664472,
		),
	),
	next_prices : array(
		$client->starGiftUpgradePrice(
			date : 39,
			upgrade_stars : 2845618757564845336,
		),
	),
);
```