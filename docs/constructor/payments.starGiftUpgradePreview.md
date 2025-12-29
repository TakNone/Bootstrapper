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
			name : 'dmGSpA1nqc49xWgC',
			document : $client->documentEmpty(
				id : -5776333031104685434,
			),
			rarity_permille : 22,
		),
		$client->starGiftAttributePattern(
			name : 'g3J5y1Cmr0VHESnM',
			document : $client->documentEmpty(
				id : 891349054377884155,
			),
			rarity_permille : 45,
		),
		$client->starGiftAttributeBackdrop(
			name : 'v6sBN8U2WkXwOcgq',
			backdrop_id : 34,
			center_color : 86,
			edge_color : 5,
			pattern_color : 44,
			text_color : 45,
			rarity_permille : 6,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 7141519556117793967,
			),
			recipient_id : $client->peerUser(
				user_id : -5385739312323140709,
			),
			date : 60,
			message : $client->textWithEntities(
				text : '9SYNJtRMQOvrB4y5',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 43,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 88,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 35,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 59,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 33,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 90,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 0,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 69,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 36,
						language : 'OkxZTNufEFt9aUS2',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 92,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 65,
						user_id : -4900539156348808943,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 59,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 12,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 24,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 58,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 57,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 83,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 78,
						document_id : -1266701897284577694,
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
			date : 29,
			upgrade_stars : 2779735609422620663,
		),
	),
	next_prices : array(
		$client->starGiftUpgradePrice(
			date : 58,
			upgrade_stars : -1249864797360033089,
		),
	),
);
```