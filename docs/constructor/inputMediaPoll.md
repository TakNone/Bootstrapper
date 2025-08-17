# inputMediaPoll

**Description** : *A poll*

**Layer** : 211

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
		id : 51596363334418514,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'UwJlV9NczGRbyTWi',
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
				option : 'r??LiveProto;?G$W',
			),
		),
		close_period : 54,
		close_date : 81,
	),
	correct_answers : array(')?z?LiveProtoTx?f'),
	solution : 'DO1lUKFvyN2dkmZW',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 7,
			length : 12,
		),
		$client->messageEntityMention(
			offset : 14,
			length : 79,
		),
		$client->messageEntityHashtag(
			offset : 52,
			length : 92,
		),
		$client->messageEntityBotCommand(
			offset : 97,
			length : 24,
		),
		$client->messageEntityUrl(
			offset : 97,
			length : 37,
		),
		$client->messageEntityEmail(
			offset : 61,
			length : 22,
		),
		$client->messageEntityBold(
			offset : 41,
			length : 70,
		),
		$client->messageEntityItalic(
			offset : 5,
			length : 97,
		),
		$client->messageEntityCode(
			offset : 48,
			length : 51,
		),
		$client->messageEntityPre(
			offset : 11,
			length : 40,
			language : '012MHnKhNIfziQWJ',
		),
		$client->messageEntityTextUrl(
			offset : 77,
			length : 11,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 87,
			length : 27,
			user_id : -8438568647272310668,
		),
		$client->inputMessageEntityMentionName(
			offset : 13,
			length : 12,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 73,
			length : 89,
		),
		$client->messageEntityCashtag(
			offset : 15,
			length : 23,
		),
		$client->messageEntityUnderline(
			offset : 33,
			length : 15,
		),
		$client->messageEntityStrike(
			offset : 20,
			length : 16,
		),
		$client->messageEntityBankCard(
			offset : 2,
			length : 68,
		),
		$client->messageEntitySpoiler(
			offset : 20,
			length : 41,
		),
		$client->messageEntityCustomEmoji(
			offset : 36,
			length : 2,
			document_id : -6742068754562957987,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 5,
			length : 72,
		),
	),
);
```