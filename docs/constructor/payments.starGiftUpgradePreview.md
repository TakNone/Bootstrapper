# payments.starGiftUpgradePreview

**Description** : *A preview of the possible attributes \(chosen randomly\) a gift &raquo; can receive after upgrading it to a collectible gift &raquo;, see here &raquo; for more info*

**Layer** : 222

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
			name : 'h3VQOCySfX8wUgbI',
			document : $client->documentEmpty(
				id : -6541180297258021521,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 17,
			),
		),
		$client->starGiftAttributePattern(
			name : 'sj497niyLTNCwWpJ',
			document : $client->documentEmpty(
				id : -6430055795427644929,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 26,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : '3aHuiMCxsFnmvdhe',
			backdrop_id : 26,
			center_color : 32,
			edge_color : 98,
			pattern_color : 95,
			text_color : 97,
			rarity : $client->starGiftAttributeRarity(
				permille : 74,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 2563865665877862098,
			),
			recipient_id : $client->peerUser(
				user_id : 8636818816913986769,
			),
			date : 1,
			message : $client->textWithEntities(
				text : 'SpTaL9zt6gQMFHDx',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 58,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 5,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 1,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 87,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 61,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 5,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 4,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 85,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 88,
						language : 'U4JmwrSMH95fYcpF',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 32,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 31,
						user_id : 7883335451207469336,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 67,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 73,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 4,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 5,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 59,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 41,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 48,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 62,
						document_id : 5855654399776572182,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 82,
					),
				),
			),
		),
	),
	prices : array(
		$client->starGiftUpgradePrice(
			date : 72,
			upgrade_stars : -3755679721569033354,
		),
	),
	next_prices : array(
		$client->starGiftUpgradePrice(
			date : 37,
			upgrade_stars : 5140874571711004487,
		),
	),
);
```