# updateMessagePoll

**Layer** : 214

```tl
updateMessagePoll#aca1657b flags:# poll_id:long poll:flags.0?Poll results:PollResults = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>poll_id</mark> | [`long`](type/long) | NOTHING |
| **poll** | [`flags.0?Poll`](type/Poll) | NOTHING |
| <mark>results</mark> | [`PollResults`](type/PollResults) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMessagePoll(
	poll_id : 9009537648214972936,
	poll : $client->poll(
		id : -5791452550450826640,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'UpFsV75aj9PnW8Dl',
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
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		close_period : 83,
		close_date : 14,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 56,
			),
		),
		total_voters : 21,
		recent_voters : array(
			$client->peerUser(
				user_id : -3385337225809580395,
			),
			$client->peerChat(
				chat_id : 4152053521244723771,
			),
			$client->peerChannel(
				channel_id : -4276100795560575093,
			),
		),
		solution : '830DZdAb7JQ5laBI',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 50,
				length : 97,
			),
			$client->messageEntityMention(
				offset : 57,
				length : 3,
			),
			$client->messageEntityHashtag(
				offset : 12,
				length : 6,
			),
			$client->messageEntityBotCommand(
				offset : 74,
				length : 8,
			),
			$client->messageEntityUrl(
				offset : 98,
				length : 95,
			),
			$client->messageEntityEmail(
				offset : 80,
				length : 85,
			),
			$client->messageEntityBold(
				offset : 38,
				length : 54,
			),
			$client->messageEntityItalic(
				offset : 23,
				length : 96,
			),
			$client->messageEntityCode(
				offset : 49,
				length : 56,
			),
			$client->messageEntityPre(
				offset : 27,
				length : 3,
				language : 'Sgktl7Km4T1Fshdr',
			),
			$client->messageEntityTextUrl(
				offset : 97,
				length : 16,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 72,
				length : 75,
				user_id : 1981303370311590099,
			),
			$client->inputMessageEntityMentionName(
				offset : 54,
				length : 88,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 39,
				length : 51,
			),
			$client->messageEntityCashtag(
				offset : 41,
				length : 77,
			),
			$client->messageEntityUnderline(
				offset : 70,
				length : 87,
			),
			$client->messageEntityStrike(
				offset : 73,
				length : 85,
			),
			$client->messageEntityBankCard(
				offset : 78,
				length : 95,
			),
			$client->messageEntitySpoiler(
				offset : 99,
				length : 28,
			),
			$client->messageEntityCustomEmoji(
				offset : 55,
				length : 22,
				document_id : -8854579395463072585,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 66,
				length : 3,
			),
		),
	),
);
```