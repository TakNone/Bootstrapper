# updateMessagePoll

**Description** : *The results of a poll have changed*

**Layer** : 222

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
	poll_id : -357171025338396900,
	poll : $client->poll(
		id : -7569020883819610877,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'tMyIlXAgrG6odRY9',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 3,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 77,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 14,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 39,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 23,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 0,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 34,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 5,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 83,
					language : 'J5lhuo6ZiTA1UXcq',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 58,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 91,
					user_id : -7190888952175081998,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 33,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 85,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 6,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 8,
					document_id : 649717792177699042,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 64,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'oPWSEM2YhHDQxIBl',
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
		close_period : 66,
		close_date : 8,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 28,
			),
		),
		total_voters : 1,
		recent_voters : array(
			$client->peerUser(
				user_id : -2497669149314433472,
			),
			$client->peerChat(
				chat_id : 9099921846124124810,
			),
			$client->peerChannel(
				channel_id : 3342810033589770868,
			),
		),
		solution : '83OKqniMZoDQvAHE',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 95,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 42,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 21,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 88,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 32,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 53,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 94,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 96,
				language : 'aZBVnEIM6UoAey7Q',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 54,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 23,
				user_id : 4419358681709039784,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 17,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 84,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 63,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 76,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 96,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 22,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 8,
				document_id : -2242823936249866980,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 67,
			),
		),
	),
);
```