# poll

**Description** : *Poll*

**Layer** : 211

```tl
poll#58747131 id:long flags:# closed:flags.0?true public_voters:flags.1?true multiple_choice:flags.2?true quiz:flags.3?true question:TextWithEntities answers:Vector<PollAnswer> close_period:flags.4?int close_date:flags.5?int = Poll;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | ID of the poll |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **closed** | [`flags.0?true`](type/true) | Whether the poll is closed and doesn't accept any more answers |
| **public_voters** | [`flags.1?true`](type/true) | Whether cast votes are publicly visible to all users (non-anonymous poll) |
| **multiple_choice** | [`flags.2?true`](type/true) | Whether multiple options can be chosen as answer |
| **quiz** | [`flags.3?true`](type/true) | Whether this is a quiz (with wrong and correct answers, results shown in the return type) |
| <mark>question</mark> | [`TextWithEntities`](type/TextWithEntities) | The question of the poll (only Premium users can use custom emoji entities here) |
| <mark>answers</mark> | [`Vector<PollAnswer>`](type/PollAnswer) | The possible answers, vote using messages.sendVote |
| **close_period** | [`flags.4?int`](type/int) | Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date |
| **close_date** | [`flags.5?int`](type/int) | Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future; can't be used together with close_period |

---

## Type

[Poll](type/Poll)

---

## Example

```php
$poll = $client->poll(
	id : 2477120276778343409,
	closed : true,
	public_voters : true,
	multiple_choice : true,
	quiz : true,
	question : $client->textWithEntities(
		text : '47qZjH9rOe1p8NIi',
		entities : array(
			$client->messageEntityUnknown(
				offset : 35,
				length : 80,
			),
			$client->messageEntityMention(
				offset : 96,
				length : 63,
			),
			$client->messageEntityHashtag(
				offset : 54,
				length : 83,
			),
			$client->messageEntityBotCommand(
				offset : 79,
				length : 92,
			),
			$client->messageEntityUrl(
				offset : 61,
				length : 91,
			),
			$client->messageEntityEmail(
				offset : 85,
				length : 67,
			),
			$client->messageEntityBold(
				offset : 3,
				length : 93,
			),
			$client->messageEntityItalic(
				offset : 56,
				length : 51,
			),
			$client->messageEntityCode(
				offset : 62,
				length : 60,
			),
			$client->messageEntityPre(
				offset : 83,
				length : 56,
				language : 'zsw2FIrTaCHSuykt',
			),
			$client->messageEntityTextUrl(
				offset : 35,
				length : 85,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 7,
				length : 58,
				user_id : -1978232352704790792,
			),
			$client->inputMessageEntityMentionName(
				offset : 34,
				length : 93,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 79,
				length : 96,
			),
			$client->messageEntityCashtag(
				offset : 6,
				length : 59,
			),
			$client->messageEntityUnderline(
				offset : 97,
				length : 90,
			),
			$client->messageEntityStrike(
				offset : 28,
				length : 43,
			),
			$client->messageEntityBankCard(
				offset : 96,
				length : 39,
			),
			$client->messageEntitySpoiler(
				offset : 93,
				length : 36,
			),
			$client->messageEntityCustomEmoji(
				offset : 94,
				length : 79,
				document_id : 1779021965875082346,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 17,
				length : 51,
			),
		),
	),
	answers : array(
		$client->pollAnswer(
			text : $client->textWithEntities(
				text : 'a7ugUcfnTSYX6lmE',
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
			option : '9?i??LiveProto?K1??',
		),
	),
	close_period : 26,
	close_date : 71,
);
```