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
			name : 'QiWHlOBzUJuvkYay',
			document : $client->documentEmpty(
				id : -3609792597202707897,
			),
			rarity_permille : 9,
		),
		$client->starGiftAttributePattern(
			name : '7Vj62FDJaW50Ruw1',
			document : $client->documentEmpty(
				id : 306411704776757006,
			),
			rarity_permille : 41,
		),
		$client->starGiftAttributeBackdrop(
			name : 'yjNandESwYxIvf31',
			backdrop_id : 48,
			center_color : 70,
			edge_color : 49,
			pattern_color : 66,
			text_color : 41,
			rarity_permille : 32,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -223249184890549500,
			),
			recipient_id : $client->peerUser(
				user_id : -3146419500631582580,
			),
			date : 39,
			message : $client->textWithEntities(
				text : 'v8aD5yM9lbTpAhgL',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 97,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 41,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 78,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 80,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 43,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 20,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 68,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 24,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 49,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 71,
						language : 'TxNeLUW1k0BzSAmf',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 71,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 46,
						user_id : 6666145610423434333,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 70,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 61,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 79,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 47,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 2,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 46,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 39,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 94,
						document_id : -3017580847503423220,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 16,
					),
				),
			),
		),
	),
	prices : array(
		$client->starGiftUpgradePrice(
			date : 75,
			upgrade_stars : -6354188632411112635,
		),
	),
	next_prices : array(
		$client->starGiftUpgradePrice(
			date : 88,
			upgrade_stars : 7520536834438054779,
		),
	),
);
```