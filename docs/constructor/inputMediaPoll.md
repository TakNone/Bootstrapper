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
		id : 5269718132353191816,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'tWDNCAcMkOeUq1wb',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 24,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 31,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 30,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 72,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 92,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 64,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 73,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 8,
					language : 'shZKOJ6vRPSnf52e',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 68,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 92,
					user_id : 2759780976168109832,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 30,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 46,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 16,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 77,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 5,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 31,
					document_id : 4390673633362492530,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 60,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'UWhwzTR3SO5tkHY4',
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
		close_period : 61,
		close_date : 29,
	),
	correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	solution : 'pDXC3lwHGuUQm1yj',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 6,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 74,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 76,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 53,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 98,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 86,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 41,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 44,
			language : 'A7RmFb9l5TscuK2e',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 10,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 73,
			user_id : 9040507192672593425,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 71,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 41,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 61,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 77,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 84,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 91,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 20,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 40,
			document_id : 5935959413335973371,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 23,
		),
	),
);
```