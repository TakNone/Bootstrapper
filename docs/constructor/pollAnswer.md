# pollAnswer

**Description** : *A possible answer of a poll*

**Layer** : 225

```tl
pollAnswer#4b7d786a flags:# text:TextWithEntities option:bytes media:flags.0?MessageMedia added_by:flags.1?Peer date:flags.1?int = PollAnswer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | Textual representation of the answer (only Premium users can use custom emoji entities here) |
| <mark>option</mark> | [`bytes`](type/bytes) | The param that has to be passed to messages.sendVote |
| **media** | [`flags.0?MessageMedia`](type/MessageMedia) | NOTHING |
| **added_by** | [`flags.1?Peer`](type/Peer) | NOTHING |
| **date** | [`flags.1?int`](type/int) | NOTHING |

---

## Type

[PollAnswer](type/PollAnswer)

---

## Example

```php
$pollAnswer = $client->pollAnswer(
	text : $client->textWithEntities(
		text : 'MQ8w9si3hBnq17GL',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 68,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 66,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 61,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 9,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 26,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 82,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 33,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 46,
				language : 'V7FMjIkA43LZ1UzT',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 32,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 52,
				user_id : -1081569993134005239,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 75,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 30,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 79,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 11,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 21,
				document_id : -1421779438225817013,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 63,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 28,
				date : 68,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 31,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 10,
				old_text : 'n8K7z3Jwdjsa0pf6',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 92,
			),
		),
	),
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	media : $client->messageMediaEmpty(),
	added_by : $client->peerUser(
		user_id : -3530138379424018839,
	),
	date : 57,
);
```