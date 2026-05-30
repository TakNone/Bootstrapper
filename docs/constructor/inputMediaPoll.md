# inputMediaPoll

**Description** : *A poll*

**Layer** : 222

```tl
inputMediaPoll#f94e5f1 flags:# poll:Poll correct_answers:flags.0?Vector<bytes> solution:flags.1?string solution_entities:flags.1?Vector<MessageEntity> = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>poll</mark> | [`Poll`](type/Poll) | The poll to send |
| **correct_answers** | [`flags.0?Vector<bytes>`](type/bytes) | Correct answer IDs (for quiz polls) |
| **solution** | [`flags.1?string`](type/string) | Explanation of quiz solution |
| **solution_entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaPoll(
	poll : $client->poll(
		id : -2532477350796400574,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'OkBiQNla13KMJrPX',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 89,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 4,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 37,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 80,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 46,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 39,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 28,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 66,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 34,
					language : 'yxtmQHhAbJ7NBkIE',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 78,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 94,
					user_id : -3023328036716589117,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 10,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 47,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 12,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 42,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 25,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 41,
					document_id : 7946601785658597939,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 84,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'Nqo7UMhPjT6ScGBQ',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
					),
				),
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		close_period : 73,
		close_date : 11,
	),
	correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	solution : 'Vb0W9FPEL5ZmkgQX',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 47,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 4,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 95,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 71,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 74,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 12,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 57,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 36,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 81,
			language : 'i6OJqNPr2scb7EyR',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 63,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : -3843302997895798943,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 67,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 91,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 15,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 65,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 39,
			document_id : 3072652090632233864,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 95,
		),
	),
);
```