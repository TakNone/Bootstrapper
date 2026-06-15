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
		text : 'ACH4E3c7q6DZmzxQ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 80,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 33,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 72,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 68,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 80,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 17,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 87,
				language : 'ftSnRuzhclspxdoN',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 7,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 75,
				user_id : -2413673047083671370,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 43,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 34,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 48,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 97,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 8,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 15,
				document_id : 6012644563466616673,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 88,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 94,
				date : 83,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 52,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 99,
				old_text : 'LmrKk94hS1CjuwiU',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 94,
			),
		),
	),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```