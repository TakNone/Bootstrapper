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
		id : -6111870618494334178,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'Dp3XeYOzvEoZtGhq',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 28,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 61,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 70,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 98,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 7,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 87,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 31,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 20,
					language : 'qVlcmhnIQA2RZKOJ',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 56,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 35,
					user_id : -5695382525383932853,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 12,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 88,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 65,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 95,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 50,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 0,
					document_id : -8493721835153319721,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 49,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'jZzxSBl1pgUv4WK7',
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
		close_period : 83,
		close_date : 51,
	),
	correct_answers : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
	solution : 'GCJlMmkfF57YhLb8',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 98,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 91,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 31,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 51,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 4,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 22,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 5,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 36,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 45,
			language : 'MJbviouTjNHatnpL',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 54,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 70,
			user_id : -6716921015166721571,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 65,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 89,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 66,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 52,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 100,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 96,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 42,
			document_id : -5042884586979497099,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 37,
		),
	),
);
```