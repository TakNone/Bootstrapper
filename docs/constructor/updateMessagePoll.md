# updateMessagePoll

**Description** : *The results of a poll have changed*

**Layer** : 211

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
	poll_id : 1593793524440042487,
	poll : $client->poll(
		id : -5657934453621468703,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'Emesw8NFizSnyqj6',
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
				option : 'A????LiveProto?(,?',
			),
		),
		close_period : 60,
		close_date : 46,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : '?B?V|LiveProto??n?',
				voters : 95,
			),
		),
		total_voters : 63,
		recent_voters : array(
			$client->peerUser(
				user_id : -6323727134198354801,
			),
			$client->peerChat(
				chat_id : 8507848552313177029,
			),
			$client->peerChannel(
				channel_id : -3394398298559859655,
			),
		),
		solution : 'vMVa173jcH5YnmiF',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 26,
				length : 47,
			),
			$client->messageEntityMention(
				offset : 76,
				length : 71,
			),
			$client->messageEntityHashtag(
				offset : 50,
				length : 51,
			),
			$client->messageEntityBotCommand(
				offset : 87,
				length : 22,
			),
			$client->messageEntityUrl(
				offset : 21,
				length : 12,
			),
			$client->messageEntityEmail(
				offset : 97,
				length : 46,
			),
			$client->messageEntityBold(
				offset : 95,
				length : 14,
			),
			$client->messageEntityItalic(
				offset : 77,
				length : 51,
			),
			$client->messageEntityCode(
				offset : 99,
				length : 15,
			),
			$client->messageEntityPre(
				offset : 63,
				length : 46,
				language : 'POBWcYbJIzShxagm',
			),
			$client->messageEntityTextUrl(
				offset : 69,
				length : 47,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 60,
				length : 2,
				user_id : -4945911737978266551,
			),
			$client->inputMessageEntityMentionName(
				offset : 57,
				length : 47,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 81,
				length : 9,
			),
			$client->messageEntityCashtag(
				offset : 40,
				length : 11,
			),
			$client->messageEntityUnderline(
				offset : 20,
				length : 33,
			),
			$client->messageEntityStrike(
				offset : 98,
				length : 62,
			),
			$client->messageEntityBankCard(
				offset : 82,
				length : 58,
			),
			$client->messageEntitySpoiler(
				offset : 21,
				length : 97,
			),
			$client->messageEntityCustomEmoji(
				offset : 89,
				length : 44,
				document_id : 2584113183366690040,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 25,
				length : 89,
			),
		),
	),
);
```