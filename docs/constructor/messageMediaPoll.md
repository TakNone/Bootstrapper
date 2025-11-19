# messageMediaPoll

**Description** : *Poll*

**Layer** : 218

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
		id : -3677164120141565090,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'GCF2Z1KV0pUxJBfE',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 64,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 81,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 79,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 84,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 55,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 12,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 4,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 6,
					language : 'gjXMh0ofmxO6nDbI',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 78,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 2,
					user_id : -810106978638765896,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 35,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 61,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 39,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 57,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 43,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 71,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 55,
					document_id : 2334680557337049428,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 83,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'tPAb2Ye7IzpR0EgW',
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
		close_period : 36,
		close_date : 1,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 88,
			),
		),
		total_voters : 5,
		recent_voters : array(
			$client->peerUser(
				user_id : 832412492894099796,
			),
			$client->peerChat(
				chat_id : -5238942670933602011,
			),
			$client->peerChannel(
				channel_id : -4613443837444864917,
			),
		),
		solution : 'LrJEvKQhG5c1FtUi',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 40,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 95,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 89,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 9,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 58,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 5,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 42,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 46,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 33,
				language : 'AceNb0P82FzdtJMW',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 33,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 66,
				user_id : -321972792145648009,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 10,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 33,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 61,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 55,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 16,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 28,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 64,
				document_id : 5015645685671515216,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 50,
			),
		),
	),
);
```