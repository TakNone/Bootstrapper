# pollAnswer

**Description** : *A possible answer of a poll*

**Layer** : 233

```tl
pollAnswer#4b7d786a flags:# text:TextWithEntities option:bytes media:flags.0?MessageMedia added_by:flags.1?Peer date:flags.1?int = PollAnswer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | Textual representation of the answer (only Premium users can use custom emoji entities here) |
| <mark>option</mark> | [`bytes`](type/bytes) | The param that has to be passed to messages.sendVote |
| **media** | [`flags.0?MessageMedia`](type/MessageMedia) | Optional media attachment displayed alongside the answer |
| **added_by** | [`flags.1?Peer`](type/Peer) | The peer who added this answer; only set for answers dynamically added to an open-answer poll, see polls » |
| **date** | [`flags.1?int`](type/int) | When this answer was added; only set for answers dynamically added to an open-answer poll |

---

## Type

[PollAnswer](type/PollAnswer)

---

## Example

```php
$pollAnswer = $client->pollAnswer(
	text : $client->textWithEntities(
		text : '4P8Cuv703okaEyLQ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 76,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 69,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 63,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 19,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 9,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 4,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 69,
				language : '5h1oFYzWIG8b0Zqx',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 10,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 3,
				user_id : 5570835838893665181,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 12,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 14,
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
				length : 67,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 72,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 32,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 67,
				document_id : -3388564436888457411,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 2,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 93,
				date : 20,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 42,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 14,
				old_text : 'tCHOAsZ2M4lqyk7p',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 27,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 32,
			),
		),
	),
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	media : $client->messageMediaEmpty(),
	added_by : $client->peerUser(
		user_id : -3085384406872351158,
	),
	date : 31,
);
```