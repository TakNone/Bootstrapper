# messageMediaPoll

**Description** : *Poll*

**Layer** : 211

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
		id : 1099976791755944408,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : '9teOMhznaZlDGf8W',
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
				option : 'w???LiveProtow?iQ\'',
			),
		),
		close_period : 85,
		close_date : 20,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : 'S???sLiveProtorZ;??',
				voters : 98,
			),
		),
		total_voters : 68,
		recent_voters : array(
			$client->peerUser(
				user_id : 5259624581060532363,
			),
			$client->peerChat(
				chat_id : -8020316745379261255,
			),
			$client->peerChannel(
				channel_id : -8421120284901851158,
			),
		),
		solution : 'apXby8v2Y7EgFQz5',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 70,
				length : 99,
			),
			$client->messageEntityMention(
				offset : 57,
				length : 21,
			),
			$client->messageEntityHashtag(
				offset : 89,
				length : 1,
			),
			$client->messageEntityBotCommand(
				offset : 83,
				length : 70,
			),
			$client->messageEntityUrl(
				offset : 5,
				length : 68,
			),
			$client->messageEntityEmail(
				offset : 70,
				length : 58,
			),
			$client->messageEntityBold(
				offset : 94,
				length : 33,
			),
			$client->messageEntityItalic(
				offset : 7,
				length : 47,
			),
			$client->messageEntityCode(
				offset : 97,
				length : 89,
			),
			$client->messageEntityPre(
				offset : 70,
				length : 60,
				language : '3Y0lGCN9VUABd6j5',
			),
			$client->messageEntityTextUrl(
				offset : 98,
				length : 16,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 55,
				length : 25,
				user_id : 6888972004551441520,
			),
			$client->inputMessageEntityMentionName(
				offset : 10,
				length : 17,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 26,
				length : 35,
			),
			$client->messageEntityCashtag(
				offset : 3,
				length : 66,
			),
			$client->messageEntityUnderline(
				offset : 89,
				length : 12,
			),
			$client->messageEntityStrike(
				offset : 14,
				length : 44,
			),
			$client->messageEntityBankCard(
				offset : 68,
				length : 46,
			),
			$client->messageEntitySpoiler(
				offset : 34,
				length : 79,
			),
			$client->messageEntityCustomEmoji(
				offset : 21,
				length : 17,
				document_id : -7653985272985782416,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 99,
				length : 5,
			),
		),
	),
);
```