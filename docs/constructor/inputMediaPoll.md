# inputMediaPoll

**Description** : *A poll*

**Layer** : 218

```tl
inputMediaPoll#f94e5f1 flags:# poll:Poll correct_answers:flags.0?Vector<bytes> solution:flags.1?string solution_entities:flags.1?Vector<MessageEntity> = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		id : -7651049116773059134,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'l6Mz1WuyHD0xNRso',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 28,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 86,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 59,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 62,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 6,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 30,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 33,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 75,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 1,
					language : 'SFtkCXmPG3wsM9KB',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 76,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 26,
					user_id : 2126359442609373670,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 59,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 77,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 11,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 47,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 72,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 2,
					document_id : -7420487623056076136,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 93,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'KwjGgSQLvAx840pc',
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
		close_period : 50,
		close_date : 98,
	),
	correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	solution : '25psxemZE1nJugzK',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 73,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 25,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 6,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 11,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 94,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 19,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 35,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 8,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 44,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 47,
			language : 'PVwARqCEb7Dru9Xv',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 31,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 42,
			user_id : -3932787771183936388,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 83,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 96,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 98,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 93,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 69,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 24,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 60,
			document_id : 8085735995922511189,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 59,
		),
	),
);
```