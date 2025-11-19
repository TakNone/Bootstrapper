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
		id : -6294063366433656573,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : '4vNtmKnhwQ3CIHdq',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 69,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 87,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 1,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 67,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 76,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 74,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 60,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 67,
					language : 'kFDqlX3u4VwW5fEI',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 44,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 86,
					user_id : -895232761096445556,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 4,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 50,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 59,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 77,
					document_id : -1102531094593727130,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 68,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'UYMdOLxo82NSnz6l',
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
		close_period : 88,
		close_date : 14,
	),
	correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	solution : 'LCxDEvFGRKjnNO8B',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 23,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 22,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 35,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 40,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 93,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 75,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 56,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 92,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 16,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 16,
			language : 'awDM5lZE92NHiIXu',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 64,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 7,
			user_id : 3331398533873329275,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 88,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 7,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 23,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 38,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 20,
			document_id : -7320937921667707575,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 53,
		),
	),
);
```