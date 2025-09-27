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
		id : -2199464557516992323,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'kqIxJiGKZOhErfa3',
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
		close_period : 32,
		close_date : 73,
	),
	correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	solution : 'Ogn3YM64AZLJXSKP',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 62,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 85,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 16,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 98,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 22,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 47,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 33,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 90,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 61,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 21,
			language : 'kNUzw8cHf54u9CxW',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 58,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 80,
			user_id : -1011357190598667493,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 24,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 33,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 25,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 43,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 21,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 78,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 100,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 11,
			document_id : -5232700851465271468,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 47,
		),
	),
);
```