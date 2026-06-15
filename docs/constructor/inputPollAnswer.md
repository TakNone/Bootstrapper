# inputPollAnswer

**Layer** : 227

```tl
inputPollAnswer#199fed96 flags:# text:TextWithEntities media:flags.0?InputMedia = PollAnswer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |
| **media** | [`flags.0?InputMedia`](type/InputMedia) | NOTHING |

---

## Type

[PollAnswer](type/PollAnswer)

---

## Example

```php
$pollAnswer = $client->inputPollAnswer(
	text : $client->textWithEntities(
		text : 'b1hCXBUitmTYaE8n',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 53,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 95,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 90,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 89,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 1,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 52,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 53,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 80,
				language : 'WA9X3LI6Sy8lJ1dK',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 86,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 16,
				user_id : -4905322281849393278,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 63,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 60,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 24,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 84,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 51,
				document_id : -635437065047301032,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 14,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 88,
				date : 56,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 42,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 33,
				old_text : 'I3SCqdyFfxcTOLQl',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 49,
			),
		),
	),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```