# updateMessagePoll

**Description** : *The results of a poll have changed*

**Layer** : 218

```tl
updateMessagePoll#aca1657b flags:# poll_id:long poll:flags.0?Poll results:PollResults = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	poll_id : -4998870554240979747,
	poll : $client->poll(
		id : -3852484517779968799,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : '5MFZI9RSWUg8Kqjp',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 64,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 54,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 95,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 86,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 20,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 68,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 77,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 36,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 44,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 18,
					language : 'edKZh8iXyc0m3MCz',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 16,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 29,
					user_id : 6670444350783120912,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 91,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 31,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 56,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 48,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 9,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 26,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 89,
					document_id : 1658964182047221579,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 5,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'ef6iKh3qOCM1PUDH',
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
		close_period : 64,
		close_date : 81,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 24,
			),
		),
		total_voters : 86,
		recent_voters : array(
			$client->peerUser(
				user_id : 2738368794675754819,
			),
			$client->peerChat(
				chat_id : 2095642681210947147,
			),
			$client->peerChannel(
				channel_id : -7983945344044898148,
			),
		),
		solution : 'SKbEOyUR9Fum24Ys',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 37,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 84,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 96,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 94,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 98,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 83,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 25,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 22,
				language : 'gWdz3sBHMbFCoK9O',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 24,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 62,
				user_id : 2129817830369750511,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 86,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 81,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 34,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 13,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 91,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 36,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 95,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 63,
				document_id : -6688022492267305984,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 4,
			),
		),
	),
);
```