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
		id : 5409401751149935518,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'RibCqFPVwvxMucQS',
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
		close_period : 1,
		close_date : 88,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 79,
			),
		),
		total_voters : 87,
		recent_voters : array(
			$client->peerUser(
				user_id : -6275001587238617284,
			),
			$client->peerChat(
				chat_id : -3525010299307750933,
			),
			$client->peerChannel(
				channel_id : 769520558469691185,
			),
		),
		solution : 'hqNZvQMG8zgULjDB',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 31,
				length : 48,
			),
			$client->messageEntityMention(
				offset : 84,
				length : 36,
			),
			$client->messageEntityHashtag(
				offset : 16,
				length : 41,
			),
			$client->messageEntityBotCommand(
				offset : 10,
				length : 49,
			),
			$client->messageEntityUrl(
				offset : 100,
				length : 83,
			),
			$client->messageEntityEmail(
				offset : 63,
				length : 67,
			),
			$client->messageEntityBold(
				offset : 13,
				length : 85,
			),
			$client->messageEntityItalic(
				offset : 95,
				length : 3,
			),
			$client->messageEntityCode(
				offset : 91,
				length : 63,
			),
			$client->messageEntityPre(
				offset : 7,
				length : 84,
				language : 'x3u6W9mXKhQ7a58l',
			),
			$client->messageEntityTextUrl(
				offset : 33,
				length : 39,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 45,
				length : 60,
				user_id : 6844754145895554504,
			),
			$client->inputMessageEntityMentionName(
				offset : 81,
				length : 100,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 79,
				length : 77,
			),
			$client->messageEntityCashtag(
				offset : 49,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 32,
				length : 70,
			),
			$client->messageEntityStrike(
				offset : 85,
				length : 22,
			),
			$client->messageEntityBankCard(
				offset : 11,
				length : 85,
			),
			$client->messageEntitySpoiler(
				offset : 24,
				length : 6,
			),
			$client->messageEntityCustomEmoji(
				offset : 2,
				length : 87,
				document_id : 3525044100603363918,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 37,
				length : 18,
			),
		),
	),
);
```