# pollAnswer

**Description** : *A possible answer of a poll*

**Layer** : 227

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
		text : 'VtQxSgjvTAmLRbDf',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 74,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 44,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 22,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 74,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 38,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 57,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 61,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 66,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 86,
				language : 'h5gxTFGRWMncKiaf',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 81,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 98,
				user_id : -3096379772782304196,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 26,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 34,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 29,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 74,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 80,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 65,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 81,
				document_id : 681081419018456735,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 20,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 77,
				date : 4,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 40,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 50,
				old_text : '3qmkizIK1vpcOwg7',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 59,
			),
		),
	),
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	media : $client->messageMediaEmpty(),
	added_by : $client->peerUser(
		user_id : 7842590593677971907,
	),
	date : 22,
);
```