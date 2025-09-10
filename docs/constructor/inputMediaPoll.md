# inputMediaPoll

**Description** : *A poll*

**Layer** : 214

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
		id : 8673382408194843237,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'tjbqcD7rLoUvJPAu',
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
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(...),
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		close_period : 100,
		close_date : 75,
	),
	correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	solution : 'PMzDnCxyTiejomRI',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 17,
			length : 82,
		),
		$client->messageEntityMention(
			offset : 9,
			length : 96,
		),
		$client->messageEntityHashtag(
			offset : 34,
			length : 96,
		),
		$client->messageEntityBotCommand(
			offset : 84,
			length : 75,
		),
		$client->messageEntityUrl(
			offset : 23,
			length : 1,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 75,
		),
		$client->messageEntityBold(
			offset : 34,
			length : 75,
		),
		$client->messageEntityItalic(
			offset : 96,
			length : 33,
		),
		$client->messageEntityCode(
			offset : 74,
			length : 48,
		),
		$client->messageEntityPre(
			offset : 7,
			length : 98,
			language : '1zJdLx6fP49MkDb5',
		),
		$client->messageEntityTextUrl(
			offset : 48,
			length : 66,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 2,
			length : 100,
			user_id : -5590244255154623345,
		),
		$client->inputMessageEntityMentionName(
			offset : 80,
			length : 52,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 98,
			length : 64,
		),
		$client->messageEntityCashtag(
			offset : 85,
			length : 97,
		),
		$client->messageEntityUnderline(
			offset : 69,
			length : 27,
		),
		$client->messageEntityStrike(
			offset : 55,
			length : 52,
		),
		$client->messageEntityBankCard(
			offset : 15,
			length : 55,
		),
		$client->messageEntitySpoiler(
			offset : 96,
			length : 3,
		),
		$client->messageEntityCustomEmoji(
			offset : 45,
			length : 56,
			document_id : -4824884986114834124,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 3,
			length : 1,
		),
	),
);
```