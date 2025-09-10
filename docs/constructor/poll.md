# poll

**Description** : *Poll*

**Layer** : 214

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
	id : 7328479993415348696,
	closed : true,
	public_voters : true,
	multiple_choice : true,
	quiz : true,
	question : $client->textWithEntities(
		text : 'hx0DTSWYnkigGfQa',
		entities : array(
			$client->messageEntityUnknown(
				offset : 69,
				length : 16,
			),
			$client->messageEntityMention(
				offset : 17,
				length : 59,
			),
			$client->messageEntityHashtag(
				offset : 64,
				length : 97,
			),
			$client->messageEntityBotCommand(
				offset : 4,
				length : 95,
			),
			$client->messageEntityUrl(
				offset : 37,
				length : 18,
			),
			$client->messageEntityEmail(
				offset : 21,
				length : 78,
			),
			$client->messageEntityBold(
				offset : 11,
				length : 84,
			),
			$client->messageEntityItalic(
				offset : 19,
				length : 51,
			),
			$client->messageEntityCode(
				offset : 8,
				length : 16,
			),
			$client->messageEntityPre(
				offset : 33,
				length : 55,
				language : 'ano5dJ8HFKyxDleT',
			),
			$client->messageEntityTextUrl(
				offset : 45,
				length : 11,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 56,
				length : 51,
				user_id : 9126332750981793394,
			),
			$client->inputMessageEntityMentionName(
				offset : 35,
				length : 67,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 58,
				length : 51,
			),
			$client->messageEntityCashtag(
				offset : 63,
				length : 80,
			),
			$client->messageEntityUnderline(
				offset : 89,
				length : 5,
			),
			$client->messageEntityStrike(
				offset : 10,
				length : 77,
			),
			$client->messageEntityBankCard(
				offset : 68,
				length : 87,
			),
			$client->messageEntitySpoiler(
				offset : 40,
				length : 23,
			),
			$client->messageEntityCustomEmoji(
				offset : 94,
				length : 7,
				document_id : -2381125367429770668,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 84,
				length : 82,
			),
		),
	),
	answers : array(
		$client->pollAnswer(
			text : $client->textWithEntities(
				text : 'akUrC9mRyDjwgBpu',
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
	close_period : 18,
	close_date : 83,
);
```