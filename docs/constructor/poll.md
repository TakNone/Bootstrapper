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
	id : -984551855686752328,
	closed : true,
	public_voters : true,
	multiple_choice : true,
	quiz : true,
	question : $client->textWithEntities(
		text : 'JH7MS84yqXwRsd3f',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 97,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 78,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 7,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 83,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 91,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 3,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 91,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 39,
				language : 'KFjqSnlkEM0Pp32w',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 94,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 51,
				user_id : 4430174745689916610,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 78,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 21,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 3,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 7,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 12,
				document_id : -5544287310664367898,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 40,
			),
		),
	),
	answers : array(
		$client->pollAnswer(
			text : $client->textWithEntities(
				text : 'jV5iEtJqRBlwKTa4',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 78,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 100,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 11,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 92,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 96,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 8,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 10,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 5,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 37,
						language : 'HBvTknWXhE4mLMDG',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 24,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 50,
						user_id : 7175951394887048064,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 77,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 68,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 95,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 24,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 14,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 56,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 54,
						document_id : 1195672400817246584,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 34,
					),
				),
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	close_period : 48,
	close_date : 70,
);
```