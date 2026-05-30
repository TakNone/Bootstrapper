# aiComposeToneExample

**Layer** : 225

```tl
aiComposeToneExample#f1d628ec from:TextWithEntities to:TextWithEntities = AiComposeToneExample;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>from</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |
| <mark>to</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[AiComposeToneExample](type/AiComposeToneExample)

---

## Example

```php
$aiComposeToneExample = $client->aiComposeToneExample(
	from : $client->textWithEntities(
		text : 'CyDOE9HG81q4MZJe',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 85,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 28,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 79,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 45,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 38,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 35,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 95,
				language : 'xQr0M5tR76jvpeYl',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 59,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 40,
				user_id : -4139949114719904329,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 52,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 63,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 9,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 56,
				document_id : -7873522448271549510,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 47,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 25,
				date : 75,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 29,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 51,
				old_text : 'HxKyX6CuTmwrft1Z',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 44,
			),
		),
	),
	to : $client->textWithEntities(
		text : 'dwEmgMhaDe2Jb9Lk',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 10,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 64,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 1,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 97,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 42,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 88,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 41,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 90,
				language : 'UdGOSj6C7Y9vg0NR',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 45,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 6,
				user_id : -8055285888019832611,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 77,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 60,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 64,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 42,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 32,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 16,
				document_id : 7306079582249740149,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 85,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 79,
				date : 59,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 2,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 56,
				old_text : 'HisE4ltqaBD8X5y7',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 19,
			),
		),
	),
);
```