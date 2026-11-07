# inputPollAnswer

**Description** : *An answer option to add to an open\-answer poll &raquo;*

**Layer** : 229

```tl
inputPollAnswer#199fed96 flags:# text:TextWithEntities media:flags.0?InputMedia = PollAnswer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | The answer text |
| **media** | [`flags.0?InputMedia`](type/InputMedia) | Optional media attachment to display alongside the answer |

---

## Type

[PollAnswer](type/PollAnswer)

---

## Example

```php
$pollAnswer = $client->inputPollAnswer(
	text : $client->textWithEntities(
		text : 'QsF2rEMRmWlovNx1',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 45,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 17,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 83,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 56,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 93,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 31,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 10,
				language : 'ufMRW0KwFBzDyb2g',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 78,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 71,
				user_id : 4782407508822495017,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 11,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 75,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 40,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 57,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 96,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 77,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 41,
				document_id : 9123935323657848526,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 12,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 74,
				date : 89,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 49,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 56,
				old_text : 'cNnf4rWqhywa25V8',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 93,
			),
		),
	),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```