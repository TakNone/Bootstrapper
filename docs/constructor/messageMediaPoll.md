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
		id : 8453796383237133243,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'Cr8ItmAGT0VOwklu',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 73,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 24,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 5,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 75,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 24,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 36,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 28,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 78,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 35,
					language : 'q6ye4ORlhWDSPAz0',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 24,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 46,
					user_id : 7848104804643100522,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 97,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 78,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 86,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 85,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 16,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 81,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 51,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 51,
					document_id : -6332953139379029451,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 54,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'zvoYHS1b698ahOnA',
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
		close_period : 80,
		close_date : 45,
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
		total_voters : 37,
		recent_voters : array(
			$client->peerUser(
				user_id : -5168542914971484782,
			),
			$client->peerChat(
				chat_id : -7847006952532366527,
			),
			$client->peerChannel(
				channel_id : -5694996306259564256,
			),
		),
		solution : 'Q8oHzjyKd5WhIfr3',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 14,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 49,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 55,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 20,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 38,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 65,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 82,
				language : 'iVMs8WJSdfIzeroQ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 18,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 72,
				user_id : 4544186687975445778,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 17,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 42,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 6,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 56,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 90,
				document_id : -6596332967522358031,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 6,
			),
		),
	),
);
```