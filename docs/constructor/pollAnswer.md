# pollAnswer

**Description** : *A possible answer of a poll*

**Layer** : 222

```tl
pollAnswer#ff16e2ca text:TextWithEntities option:bytes = PollAnswer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | Textual representation of the answer (only Premium users can use custom emoji entities here) |
| <mark>option</mark> | [`bytes`](type/bytes) | The param that has to be passed to messages.sendVote |

---

## Type

[PollAnswer](type/PollAnswer)

---

## Example

```php
$pollAnswer = $client->pollAnswer(
	text : $client->textWithEntities(
		text : 'mebwQIo4r7UGs3Oi',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 61,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 86,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 61,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 40,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 65,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 91,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 98,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 23,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 80,
				language : '3ztxHvOG42uQA6Nb',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 41,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 44,
				user_id : -1543653765696644165,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 49,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 61,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 17,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 71,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 90,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 60,
				document_id : -6012415588718882931,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 94,
			),
		),
	),
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```