# aiComposeToneExample

**Layer** : 227

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
		text : 'TbwOqA15vSxnKXky',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 58,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 7,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 11,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 47,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 52,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 20,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 61,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 22,
				language : 'WnjZJP3SeqDFsv7A',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 99,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : 4421561356027024331,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 46,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 15,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 21,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 56,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 43,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 93,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 70,
				document_id : -8166530481695939715,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 6,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 2,
				date : 13,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 60,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 17,
				old_text : 'gV6LlHvPX5wSsBZf',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 13,
			),
		),
	),
	to : $client->textWithEntities(
		text : 'vzjAeacITp0gy61J',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 0,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 12,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 89,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 62,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 97,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 98,
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
				length : 86,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 39,
				language : 'IvOw5SitRXgyHJ4r',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 71,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 60,
				user_id : -2282974322494728874,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 16,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 92,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 39,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 70,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 96,
				document_id : -1372448819537300928,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 33,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 26,
				date : 77,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 86,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 0,
				old_text : '69N7HgiPYtDepkXz',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 20,
			),
		),
	),
);
```