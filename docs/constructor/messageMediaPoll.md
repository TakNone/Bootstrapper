# messageMediaPoll

**Description** : *Poll*

**Layer** : 216

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
		id : 8996370253054342300,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 's3PwJgiyf5oljXT6',
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
		close_period : 99,
		close_date : 52,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 39,
			),
		),
		total_voters : 4,
		recent_voters : array(
			$client->peerUser(
				user_id : -3404320234762557734,
			),
			$client->peerChat(
				chat_id : 928132619054050956,
			),
			$client->peerChannel(
				channel_id : -1041276511787746388,
			),
		),
		solution : 'fzmRhFoWqD2869BM',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 47,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 20,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 73,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 3,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 37,
				language : 'Vek5I4NLS0tAPOpH',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 84,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 91,
				user_id : 7584282651164446856,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 14,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 8,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 22,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 55,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 64,
				document_id : 1405106010483466859,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 28,
			),
		),
	),
);
```