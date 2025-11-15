# payments.starGiftUpgradePreview

**Description** : *A preview of the possible attributes \(chosen randomly\) a gift &raquo; can receive after upgrading it to a collectible gift &raquo;, see here &raquo; for more info*

**Layer** : 218

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
			name : 'zCGTA4VqwiMWJaOQ',
			document : $client->documentEmpty(
				id : -4529651309619809159,
			),
			rarity_permille : 10,
		),
		$client->starGiftAttributePattern(
			name : '1wHregbG7PY3Z094',
			document : $client->documentEmpty(
				id : 3589184985062716419,
			),
			rarity_permille : 20,
		),
		$client->starGiftAttributeBackdrop(
			name : 'db2tyuFLsgI1ejGB',
			backdrop_id : 100,
			center_color : 43,
			edge_color : 67,
			pattern_color : 62,
			text_color : 70,
			rarity_permille : 62,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 571413555268476307,
			),
			recipient_id : $client->peerUser(
				user_id : 4682089628337132779,
			),
			date : 16,
			message : $client->textWithEntities(
				text : 'G8l4VAhtHaBFmZSv',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 98,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 60,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 41,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 31,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 94,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 75,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 24,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 38,
						language : 'TrmfBk69zcgYvRlE',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 20,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 9,
						user_id : 7135422806304336326,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 49,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 67,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 16,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 61,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 85,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 62,
						document_id : -7624477841077095614,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 86,
					),
				),
			),
		),
	),
	prices : array(
		$client->starGiftUpgradePrice(
			date : 71,
			upgrade_stars : -5814770945932593250,
		),
	),
	next_prices : array(
		$client->starGiftUpgradePrice(
			date : 15,
			upgrade_stars : 1666534619995198894,
		),
	),
);
```