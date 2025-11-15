# poll

**Description** : *Poll*

**Layer** : 216

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
| <mark>answers</mark> | [`Vector<PollAnswer>`](type/PollAnswer) | The possible answers (2-poll_answers_max), vote using messages.sendVote |
| **close_period** | [`flags.4?int`](type/int) | Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date |
| **close_date** | [`flags.5?int`](type/int) | Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future; can't be used together with close_period |

---

## Type

[Poll](type/Poll)

---

## Example

```php
$poll = $client->poll(
	id : -6338967631657368375,
	closed : true,
	public_voters : true,
	multiple_choice : true,
	quiz : true,
	question : $client->textWithEntities(
		text : 'wrMLmR6jAei91ngC',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 15,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 79,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 28,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 68,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 96,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 47,
				language : 'n9EwJLVDyNPpQ3xr',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 65,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 43,
				user_id : -1703832681561976106,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 27,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 75,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 70,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 29,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 37,
				document_id : 6631972343672776412,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 84,
			),
		),
	),
	answers : array(
		$client->pollAnswer(
			text : $client->textWithEntities(
				text : 'qDEVXct5I4AxkK0C',
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
	close_period : 76,
	close_date : 75,
);
```