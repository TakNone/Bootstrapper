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
	poll_id : -5552546288535223893,
	poll : $client->poll(
		id : 1822788736750123087,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'x2DWC5AQ43hUFgvE',
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
				option : '???eLiveProtohi?D?',
			),
		),
		close_period : 43,
		close_date : 21,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : '?|?7?LiveProtoƨ?~?',
				voters : 72,
			),
		),
		total_voters : 11,
		recent_voters : array(
			$client->peerUser(
				user_id : 8315311400548199793,
			),
			$client->peerChat(
				chat_id : -6360173329239454700,
			),
			$client->peerChannel(
				channel_id : 4458078195145901565,
			),
		),
		solution : 'YxRDCWovaO1zf93m',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 5,
				length : 20,
			),
			$client->messageEntityMention(
				offset : 85,
				length : 55,
			),
			$client->messageEntityHashtag(
				offset : 38,
				length : 28,
			),
			$client->messageEntityBotCommand(
				offset : 65,
				length : 66,
			),
			$client->messageEntityUrl(
				offset : 58,
				length : 8,
			),
			$client->messageEntityEmail(
				offset : 23,
				length : 39,
			),
			$client->messageEntityBold(
				offset : 71,
				length : 36,
			),
			$client->messageEntityItalic(
				offset : 11,
				length : 38,
			),
			$client->messageEntityCode(
				offset : 64,
				length : 57,
			),
			$client->messageEntityPre(
				offset : 72,
				length : 88,
				language : 'SNBVxDMj5pLPwd0a',
			),
			$client->messageEntityTextUrl(
				offset : 4,
				length : 92,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 2,
				length : 51,
				user_id : 463318117760293688,
			),
			$client->inputMessageEntityMentionName(
				offset : 62,
				length : 22,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 96,
				length : 80,
			),
			$client->messageEntityCashtag(
				offset : 6,
				length : 61,
			),
			$client->messageEntityUnderline(
				offset : 43,
				length : 16,
			),
			$client->messageEntityStrike(
				offset : 58,
				length : 62,
			),
			$client->messageEntityBankCard(
				offset : 14,
				length : 78,
			),
			$client->messageEntitySpoiler(
				offset : 39,
				length : 40,
			),
			$client->messageEntityCustomEmoji(
				offset : 28,
				length : 80,
				document_id : -1298183463039480999,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 73,
			),
		),
	),
);
```