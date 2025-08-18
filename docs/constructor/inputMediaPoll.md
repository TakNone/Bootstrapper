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
		id : 3681417231623959526,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'I8tOzsV9gv0afJHU',
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
				option : '??+)ALiveProto? ?',
			),
		),
		close_period : 53,
		close_date : 56,
	),
	correct_answers : array('%?Y+LiveProto
???'),
	solution : 'C9AgiXW0GrIuVFfj',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 43,
			length : 93,
		),
		$client->messageEntityMention(
			offset : 68,
			length : 10,
		),
		$client->messageEntityHashtag(
			offset : 29,
			length : 100,
		),
		$client->messageEntityBotCommand(
			offset : 35,
			length : 79,
		),
		$client->messageEntityUrl(
			offset : 48,
			length : 22,
		),
		$client->messageEntityEmail(
			offset : 93,
			length : 59,
		),
		$client->messageEntityBold(
			offset : 34,
			length : 62,
		),
		$client->messageEntityItalic(
			offset : 50,
			length : 59,
		),
		$client->messageEntityCode(
			offset : 25,
			length : 88,
		),
		$client->messageEntityPre(
			offset : 22,
			length : 56,
			language : 'sq5cv03l41jQN8TZ',
		),
		$client->messageEntityTextUrl(
			offset : 3,
			length : 64,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 43,
			length : 91,
			user_id : -3479702317056036791,
		),
		$client->inputMessageEntityMentionName(
			offset : 73,
			length : 43,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 45,
			length : 5,
		),
		$client->messageEntityCashtag(
			offset : 58,
			length : 93,
		),
		$client->messageEntityUnderline(
			offset : 73,
			length : 55,
		),
		$client->messageEntityStrike(
			offset : 98,
			length : 56,
		),
		$client->messageEntityBankCard(
			offset : 86,
			length : 36,
		),
		$client->messageEntitySpoiler(
			offset : 100,
			length : 31,
		),
		$client->messageEntityCustomEmoji(
			offset : 3,
			length : 63,
			document_id : 2578972602871715431,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 99,
			length : 33,
		),
	),
);
```