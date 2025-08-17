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
		id : -2583405610618069069,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'wzcSLhJaEOTp4eny',
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
				option : '??I*GLiveProto??B?',
			),
		),
		close_period : 15,
		close_date : 93,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : '?`?LiveProto?a??a',
				voters : 97,
			),
		),
		total_voters : 17,
		recent_voters : array(
			$client->peerUser(
				user_id : 4462010223938350033,
			),
			$client->peerChat(
				chat_id : 179822916644007037,
			),
			$client->peerChannel(
				channel_id : -1832330748387075616,
			),
		),
		solution : 'QVe3PjyMulSkc9iF',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 66,
				length : 55,
			),
			$client->messageEntityMention(
				offset : 12,
				length : 58,
			),
			$client->messageEntityHashtag(
				offset : 7,
				length : 51,
			),
			$client->messageEntityBotCommand(
				offset : 72,
				length : 50,
			),
			$client->messageEntityUrl(
				offset : 7,
				length : 87,
			),
			$client->messageEntityEmail(
				offset : 14,
				length : 51,
			),
			$client->messageEntityBold(
				offset : 52,
				length : 65,
			),
			$client->messageEntityItalic(
				offset : 20,
				length : 97,
			),
			$client->messageEntityCode(
				offset : 36,
				length : 95,
			),
			$client->messageEntityPre(
				offset : 59,
				length : 13,
				language : 'XqdEHIUFQyD6mzVM',
			),
			$client->messageEntityTextUrl(
				offset : 33,
				length : 91,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 12,
				length : 60,
				user_id : -1162840360896605787,
			),
			$client->inputMessageEntityMentionName(
				offset : 47,
				length : 31,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 91,
				length : 45,
			),
			$client->messageEntityCashtag(
				offset : 65,
				length : 53,
			),
			$client->messageEntityUnderline(
				offset : 77,
				length : 87,
			),
			$client->messageEntityStrike(
				offset : 93,
				length : 29,
			),
			$client->messageEntityBankCard(
				offset : 69,
				length : 5,
			),
			$client->messageEntitySpoiler(
				offset : 85,
				length : 49,
			),
			$client->messageEntityCustomEmoji(
				offset : 42,
				length : 76,
				document_id : 7083221133379386238,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 60,
				length : 71,
			),
		),
	),
);
```