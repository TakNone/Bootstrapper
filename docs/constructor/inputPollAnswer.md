# inputPollAnswer

**Layer** : 225

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
		text : 'cjR5Qs9TvM7Vkbqx',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 13,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 63,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 74,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 57,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 89,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 74,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 57,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 70,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 53,
				language : 'Hif3SdZ5pgXUa6Mt',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 9,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 63,
				user_id : -2183668547822270851,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 33,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 95,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 28,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 37,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 24,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 16,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 69,
				document_id : -4123482839917318274,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 0,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 8,
				date : 43,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 40,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 13,
				old_text : 'gF3bykhtESY1WLr7',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 25,
			),
		),
	),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```