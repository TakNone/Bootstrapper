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
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	poll_id : 6666463209257403526,
	poll : $client->poll(
		id : 3579344879195232479,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : '2YOyCX7mevAB9Fkf',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 79,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 58,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 66,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 60,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 81,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 48,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 67,
					language : 'mE2gPYM9hGez0yoL',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 5,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 77,
					user_id : 3619537834475051252,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 19,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 59,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 90,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 56,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 60,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 29,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 18,
					document_id : 7718817712376752963,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 38,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'UPCXG5BQ6yafbINq',
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
		close_period : 76,
		close_date : 14,
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
		total_voters : 18,
		recent_voters : array(
			$client->peerUser(
				user_id : 1991184142737817713,
			),
			$client->peerChat(
				chat_id : 2917867222388539367,
			),
			$client->peerChannel(
				channel_id : -6726298743724225122,
			),
		),
		solution : 'zBbjrEQke3vclSWp',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 35,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 85,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 48,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 13,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 94,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 99,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 99,
				language : 'mIGQ14JgHEU8Ds0T',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 66,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 65,
				user_id : 6175405975027551289,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 2,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 16,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 68,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 39,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 32,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 48,
				document_id : 2982700565089421878,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 100,
			),
		),
	),
);
```