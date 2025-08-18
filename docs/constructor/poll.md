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
	id : -7401037201988640021,
	closed : true,
	public_voters : true,
	multiple_choice : true,
	quiz : true,
	question : $client->textWithEntities(
		text : 'BwH1AcKF8kylTpgU',
		entities : array(
			$client->messageEntityUnknown(
				offset : 53,
				length : 80,
			),
			$client->messageEntityMention(
				offset : 85,
				length : 29,
			),
			$client->messageEntityHashtag(
				offset : 67,
				length : 57,
			),
			$client->messageEntityBotCommand(
				offset : 95,
				length : 49,
			),
			$client->messageEntityUrl(
				offset : 19,
				length : 25,
			),
			$client->messageEntityEmail(
				offset : 100,
				length : 2,
			),
			$client->messageEntityBold(
				offset : 31,
				length : 97,
			),
			$client->messageEntityItalic(
				offset : 36,
				length : 87,
			),
			$client->messageEntityCode(
				offset : 5,
				length : 50,
			),
			$client->messageEntityPre(
				offset : 28,
				length : 38,
				language : 'eimyWSXUBE6CuOZ1',
			),
			$client->messageEntityTextUrl(
				offset : 97,
				length : 34,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 22,
				length : 90,
				user_id : -8056062918642918651,
			),
			$client->inputMessageEntityMentionName(
				offset : 62,
				length : 81,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 26,
				length : 38,
			),
			$client->messageEntityCashtag(
				offset : 13,
				length : 68,
			),
			$client->messageEntityUnderline(
				offset : 14,
				length : 91,
			),
			$client->messageEntityStrike(
				offset : 83,
				length : 72,
			),
			$client->messageEntityBankCard(
				offset : 68,
				length : 8,
			),
			$client->messageEntitySpoiler(
				offset : 19,
				length : 21,
			),
			$client->messageEntityCustomEmoji(
				offset : 97,
				length : 9,
				document_id : -6937506816903707814,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 35,
				length : 74,
			),
		),
	),
	answers : array(
		$client->pollAnswer(
			text : $client->textWithEntities(
				text : 'Ab9GSHw8pI1ryZjF',
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
			option : 'K???LiveProtoi??	',
		),
	),
	close_period : 85,
	close_date : 67,
);
```