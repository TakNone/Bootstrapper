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
			name : 'raSzDAKBLGN80TfQ',
			document : $client->documentEmpty(
				id : -8408500256260531255,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 29,
			),
		),
		$client->starGiftAttributePattern(
			name : 'JAPaId3h2Q7RbMwz',
			document : $client->documentEmpty(
				id : -8666017092960173471,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 45,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'nQw5sEt2GNdP7evm',
			backdrop_id : 95,
			center_color : 8,
			edge_color : 18,
			pattern_color : 5,
			text_color : 50,
			rarity : $client->starGiftAttributeRarity(
				permille : 39,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 5032978235012449401,
			),
			recipient_id : $client->peerUser(
				user_id : 4480039316196684454,
			),
			date : 43,
			message : $client->textWithEntities(
				text : 'kDB90CjZcT8LKqPn',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 56,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 12,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 72,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 97,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 0,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 38,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 46,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 88,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 3,
						language : 'UkvOfq6ZtsH7WIQ4',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 68,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 15,
						user_id : -4881996330253010739,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 21,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 6,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 38,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 38,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 76,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 27,
						document_id : 6298709140257678588,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 91,
					),
				),
			),
		),
	),
	prices : array(
		$client->starGiftUpgradePrice(
			date : 28,
			upgrade_stars : -7454439359059600171,
		),
	),
	next_prices : array(
		$client->starGiftUpgradePrice(
			date : 61,
			upgrade_stars : -8630765617702462678,
		),
	),
);
```