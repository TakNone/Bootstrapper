# payments.starGiftUpgradePreview

**Description** : *A preview of the possible attributes \(chosen randomly\) a gift &raquo; can receive after upgrading it to a collectible gift &raquo;, see here &raquo; for more info*

**Layer** : 225

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
			name : 'EjDCZBn54A2NthmT',
			document : $client->documentEmpty(
				id : 1957458999038035173,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 9,
			),
		),
		$client->starGiftAttributePattern(
			name : 'UfpSAkxTjP3IRJ67',
			document : $client->documentEmpty(
				id : 543842342072744810,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 79,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'cYC296X7UaViERTs',
			backdrop_id : 65,
			center_color : 66,
			edge_color : 4,
			pattern_color : 81,
			text_color : 97,
			rarity : $client->starGiftAttributeRarity(
				permille : 28,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 3389456527091117983,
			),
			recipient_id : $client->peerUser(
				user_id : -6317685027612785932,
			),
			date : 93,
			message : $client->textWithEntities(
				text : 'qDhRkLt3nKvual45',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 45,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 52,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 61,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 67,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 59,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 81,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 6,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 77,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 11,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 56,
						language : 'dbmoOwtkzAW6VTfU',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 60,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 88,
						user_id : 2877361284755965103,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 57,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 67,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 93,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 67,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 58,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 88,
						document_id : 4720477955846009123,
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
						length : 33,
						date : 83,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 90,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 18,
						old_text : 'oXIxgR49GV8TcSJf',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 56,
					),
				),
			),
		),
	),
	prices : array(
		$client->starGiftUpgradePrice(
			date : 94,
			upgrade_stars : -3696547048222390903,
		),
	),
	next_prices : array(
		$client->starGiftUpgradePrice(
			date : 17,
			upgrade_stars : 4675175349931872940,
		),
	),
);
```