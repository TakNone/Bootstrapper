# payments.starGiftUpgradeAttributes

**Layer** : 222

```tl
payments.starGiftUpgradeAttributes#46c6e36f attributes:Vector<StarGiftAttribute> = payments.StarGiftUpgradeAttributes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>attributes</mark> | [`Vector<StarGiftAttribute>`](type/StarGiftAttribute) | NOTHING |

---

## Type

[payments.StarGiftUpgradeAttributes](type/payments.StarGiftUpgradeAttributes)

---

## Example

```php
$paymentsStarGiftUpgradeAttributes = $client->payments->starGiftUpgradeAttributes(
	attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : 'WYsle8DMGLgJczTr',
			document : $client->documentEmpty(
				id : -3207058500683908738,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 7,
			),
		),
		$client->starGiftAttributePattern(
			name : 'q8VhypxajCvlsYku',
			document : $client->documentEmpty(
				id : -5527370007536573519,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 13,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'S0IdMewY37nprflU',
			backdrop_id : 64,
			center_color : 76,
			edge_color : 100,
			pattern_color : 81,
			text_color : 1,
			rarity : $client->starGiftAttributeRarity(
				permille : 74,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -7153880161972519373,
			),
			recipient_id : $client->peerUser(
				user_id : -5870515678332544165,
			),
			date : 46,
			message : $client->textWithEntities(
				text : 'SAshuXITlpfWzgBE',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 12,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 91,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 12,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 25,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 56,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 40,
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
						length : 87,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 35,
						language : '4B0nQykaur39vtNK',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 73,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 68,
						user_id : 3930623267853829410,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 66,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 80,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 94,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 35,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 32,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 60,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 13,
						document_id : -4695732662159059974,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 6,
					),
				),
			),
		),
	),
);
```