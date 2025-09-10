# updateMessagePoll

**Description** : *The results of a poll have changed*

**Layer** : 214

```tl
updateMessagePoll#aca1657b flags:# poll_id:long poll:flags.0?Poll results:PollResults = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>poll_id</mark> | [`long`](type/long) | Poll ID |
| **poll** | [`flags.0?Poll`](type/Poll) | If the server knows the client hasn't cached this poll yet, the poll itself |
| <mark>results</mark> | [`PollResults`](type/PollResults) | New poll results |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMessagePoll(
	poll_id : -4992842565239196326,
	poll : $client->poll(
		id : -8933507684904666796,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'wIe2CkVEM8z3RZQo',
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
		close_period : 93,
		close_date : 65,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 52,
			),
		),
		total_voters : 30,
		recent_voters : array(
			$client->peerUser(
				user_id : -984341234494401966,
			),
			$client->peerChat(
				chat_id : 8976772359591218220,
			),
			$client->peerChannel(
				channel_id : -2954058515856144663,
			),
		),
		solution : 'tHZyOeK4n7QIBTxN',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 40,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 51,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 38,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 8,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 20,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 57,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 53,
				language : 'DhIudVJ0GrZgwAaE',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 89,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 81,
				user_id : 3987228212979881135,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 19,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 18,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 20,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 24,
				document_id : -4135614096130053277,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 59,
			),
		),
	),
);
```