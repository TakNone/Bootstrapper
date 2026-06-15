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
		text : 'mKIyWJgxw2zptQs1',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 50,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 9,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 100,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 38,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 62,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 32,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 16,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 59,
				language : 'ZLiznBfhHmEt4ju2',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 30,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 10,
				user_id : -2614519604004705591,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 85,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 52,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 89,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 10,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 83,
				document_id : 5963963602355437060,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 99,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 38,
				date : 7,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 63,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 17,
				old_text : 'gK6kAjnNv3Gb8wfR',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 35,
			),
		),
	),
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	media : $client->messageMediaEmpty(),
	added_by : $client->peerUser(
		user_id : -4403688910341101288,
	),
	date : 14,
);
```