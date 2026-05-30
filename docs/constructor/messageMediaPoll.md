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
		id : -3099702760807169758,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		question : $client->textWithEntities(
			text : 'MWDfSE58lqrQH2jA',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 5,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 55,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 48,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 94,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 79,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 10,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 53,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 63,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 68,
					language : 'SbDHK37k1OghGnye',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 27,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 8,
					user_id : 4647023951418509624,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 12,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 33,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 17,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 32,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 97,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 81,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 85,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 99,
					document_id : -6182419349945102504,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 33,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'ieNCYQvJGDz7RlEX',
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
		close_period : 81,
		close_date : 20,
	),
	results : $client->pollResults(
		min : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 54,
			),
		),
		total_voters : 86,
		recent_voters : array(
			$client->peerUser(
				user_id : -8981142421501015527,
			),
			$client->peerChat(
				chat_id : 8048250721249461853,
			),
			$client->peerChannel(
				channel_id : 1047806789962060581,
			),
		),
		solution : 'EJpIG30zqmlZQeFA',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 11,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 41,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 55,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 38,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 5,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 48,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 12,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 16,
				language : 'gxHkIJqv2dQRZT71',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 32,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 18,
				user_id : 1606634315520369689,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 39,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 14,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 61,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 6,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 92,
				document_id : 4895917803524550375,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 95,
			),
		),
	),
);
```