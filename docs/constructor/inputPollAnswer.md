# inputPollAnswer

**Description** : *An answer option to add to an open\-answer poll &raquo;*

**Layer** : 233

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
		text : 'tnark5SE02YB97jg',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 66,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 14,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 46,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 65,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 37,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 1,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 40,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 49,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 23,
				language : 'LzNdB6Je1bHcVW4u',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 54,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 65,
				user_id : 7451670940292333746,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 99,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 43,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 63,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 49,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 69,
				document_id : -6765523682546974306,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 7,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 100,
				date : 44,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 93,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 52,
				old_text : '2EAI7qBZ31QkxySP',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 14,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 22,
			),
		),
	),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```