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
	poll_id : 8027437711748185024,
	poll : $client->poll(
		id : -5216039418477711372,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'aqyiV6e3t8pWDGLR',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 96,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 11,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 51,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 5,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 11,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 8,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 67,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 35,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 65,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 50,
					language : '1PSqXrIOxdbTCsu8',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 69,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 3,
					user_id : -5950060355598437951,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 49,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 57,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 4,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 5,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 93,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 35,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 43,
					document_id : -3585553586552140214,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 88,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : '8YvCkSZOi4mhQ5tV',
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
		close_period : 34,
		close_date : 55,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 1,
			),
		),
		total_voters : 74,
		recent_voters : array(
			$client->peerUser(
				user_id : 2325250434563482551,
			),
			$client->peerChat(
				chat_id : -8627279916380290868,
			),
			$client->peerChannel(
				channel_id : 470144127494726312,
			),
		),
		solution : 'vi2pqVJBucFwmzsa',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 96,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 62,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 57,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 13,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 70,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 39,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 35,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 14,
				language : '3NO8ymIX2l7jxz14',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 70,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 93,
				user_id : 228056719463926110,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 60,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 56,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 4,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 6,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 83,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 89,
				document_id : 8740907024649888801,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 47,
			),
		),
	),
);
```