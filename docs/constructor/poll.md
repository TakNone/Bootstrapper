# poll

**Description** : *Poll*

**Layer** : 218

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
	id : 3837800774938786398,
	closed : true,
	public_voters : true,
	multiple_choice : true,
	quiz : true,
	question : $client->textWithEntities(
		text : 'YeOtuFSIHnNiXRVJ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 71,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 68,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 55,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 50,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 4,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 17,
				language : 'zDX0FS8yxPla4vWN',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 65,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 65,
				user_id : 1553207065046411724,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 87,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 61,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 89,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 34,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 6,
				document_id : 4593406237247198506,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 100,
			),
		),
	),
	answers : array(
		$client->pollAnswer(
			text : $client->textWithEntities(
				text : 'TuerX6RvmcAnfKao',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 94,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 8,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 25,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 70,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 27,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 35,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 35,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 64,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 36,
						language : '3Cy5munMo8L6YdaE',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 14,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 92,
						user_id : -3941316039837792212,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 91,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 100,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 55,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 98,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 10,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 21,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 54,
						document_id : 3636397972778847691,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 17,
					),
				),
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	close_period : 100,
	close_date : 90,
);
```