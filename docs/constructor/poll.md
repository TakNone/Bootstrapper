# poll

**Description** : *Poll*

**Layer** : 222

```tl
poll#58747131 id:long flags:# closed:flags.0?true public_voters:flags.1?true multiple_choice:flags.2?true quiz:flags.3?true question:TextWithEntities answers:Vector<PollAnswer> close_period:flags.4?int close_date:flags.5?int = Poll;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | ID of the poll |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 2931092461948950022,
	closed : true,
	public_voters : true,
	multiple_choice : true,
	quiz : true,
	question : $client->textWithEntities(
		text : '6QkoF2p7jSDzK3su',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 81,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 17,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 30,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 42,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 53,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 71,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 46,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 86,
				language : 'Job1y2t8LAPO3mui',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 63,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : -3844758685849357502,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 16,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 52,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 22,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 38,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 58,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 44,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 25,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 67,
				document_id : 1187764025446662169,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 46,
			),
		),
	),
	answers : array(
		$client->pollAnswer(
			text : $client->textWithEntities(
				text : 'VE16iDSuxnmaR3yH',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 57,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 89,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 42,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 54,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 76,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 45,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 51,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 79,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 67,
						language : 'vVbW6Kumzqt0syLk',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 97,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 95,
						user_id : -4149873118642627546,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 92,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 14,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 12,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 86,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 65,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 19,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 85,
						document_id : 5015613070499823938,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 82,
					),
				),
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	close_period : 96,
	close_date : 25,
);
```