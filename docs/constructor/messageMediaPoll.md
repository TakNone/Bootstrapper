# messageMediaPoll

**Description** : *Poll*

**Layer** : 214

```tl
messageMediaPoll#4bd6e798 poll:Poll results:PollResults = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>poll</mark> | [`Poll`](type/Poll) | The poll |
| <mark>results</mark> | [`PollResults`](type/PollResults) | The results of the poll |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaPoll(
	poll : $client->poll(
		id : -7381820310492268309,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'Av1L3K6F2Yjcw8ke',
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
		close_period : 53,
		close_date : 59,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 86,
			),
		),
		total_voters : 31,
		recent_voters : array(
			$client->peerUser(
				user_id : 5862043417221238120,
			),
			$client->peerChat(
				chat_id : -1386664480312987048,
			),
			$client->peerChannel(
				channel_id : 8647374073017680221,
			),
		),
		solution : 'acA78LFd9ZlrySUK',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 57,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 22,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 58,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 46,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 68,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 89,
				language : 'ScqtIJif5zh1r48O',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 81,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 24,
				user_id : 7878462038786929565,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 59,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 20,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 88,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 41,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 48,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 70,
				document_id : -4834069622119663221,
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