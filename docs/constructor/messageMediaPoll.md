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
		id : 7479975369428553389,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'wnAroMi2X1p3k7yf',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 58,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 18,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 42,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 11,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 16,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 78,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 94,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 92,
					language : 's5jlEiASPrLf2cxn',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 97,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 96,
					user_id : -5315121340216425703,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 64,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 47,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 13,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 51,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 43,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 29,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 81,
					document_id : -2398210071605766950,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 4,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'ujGxmnZlXfh1BvF2',
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
		close_date : 84,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 22,
			),
		),
		total_voters : 59,
		recent_voters : array(
			$client->peerUser(
				user_id : 5220107952853526426,
			),
			$client->peerChat(
				chat_id : 6169650293312055887,
			),
			$client->peerChannel(
				channel_id : -659419052748302951,
			),
		),
		solution : 'W4SlG70kYuQZ2soy',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 14,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 78,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 22,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 84,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 43,
				language : '2HwXKvEoifstCIN3',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 92,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 7,
				user_id : -287078822452385818,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 31,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 49,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 29,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 74,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 23,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 2,
				document_id : 615796070534843373,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 52,
			),
		),
	),
);
```