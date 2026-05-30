# messageMediaPoll

**Description** : *Poll*

**Layer** : 222

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
		id : 6214637433700003675,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'csetFguGD5HhV4zE',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 48,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 6,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 87,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 64,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 41,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 39,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 67,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 9,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 42,
					language : 'V3DUnTymiMfGYo9l',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 38,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 34,
					user_id : -527040491687602928,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 34,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 51,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 41,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 35,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 9,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 90,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 63,
					document_id : 3938463129672761198,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 12,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'zguwWpavlVd4LDt6',
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
		close_period : 18,
		close_date : 65,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 46,
			),
		),
		total_voters : 26,
		recent_voters : array(
			$client->peerUser(
				user_id : 2550753964953820187,
			),
			$client->peerChat(
				chat_id : 4632496257082748564,
			),
			$client->peerChannel(
				channel_id : 5422390442296420,
			),
		),
		solution : 'VIweyuG7R9i8ETP1',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 84,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 47,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 89,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 84,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 23,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 51,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 0,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 26,
				language : '8wV01LcnN3Xqh2I7',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 45,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 41,
				user_id : 8933621185465758255,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 80,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 40,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 32,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 41,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 7,
				document_id : 5855464262422348488,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 41,
			),
		),
	),
);
```