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
	id : 5453813920319794876,
	closed : true,
	public_voters : true,
	multiple_choice : true,
	quiz : true,
	question : $client->textWithEntities(
		text : 'R0sVKMqyEjHOhC4r',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 22,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 12,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 70,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 54,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 71,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 98,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 38,
				language : 'G86tby1HlmxBknMg',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 54,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 93,
				user_id : -4166784704906846137,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 93,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 63,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 71,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 9,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 10,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 34,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 43,
				document_id : 3848315043971108242,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 17,
			),
		),
	),
	answers : array(
		$client->pollAnswer(
			text : $client->textWithEntities(
				text : '025TJab38KDRMnIO',
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
	close_period : 78,
	close_date : 86,
);
```