# pollAnswer

**Description** : *A possible answer of a poll*

**Layer** : 211

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
		text : 'AyP9oHnElujCd0zv',
		entities : array(
			$client->messageEntityUnknown(
				offset : 90,
				length : 47,
			),
			$client->messageEntityMention(
				offset : 71,
				length : 17,
			),
			$client->messageEntityHashtag(
				offset : 59,
				length : 86,
			),
			$client->messageEntityBotCommand(
				offset : 50,
				length : 16,
			),
			$client->messageEntityUrl(
				offset : 34,
				length : 61,
			),
			$client->messageEntityEmail(
				offset : 93,
				length : 47,
			),
			$client->messageEntityBold(
				offset : 89,
				length : 2,
			),
			$client->messageEntityItalic(
				offset : 99,
				length : 76,
			),
			$client->messageEntityCode(
				offset : 4,
				length : 42,
			),
			$client->messageEntityPre(
				offset : 53,
				length : 46,
				language : 'hzK6v0rNYtWFukB1',
			),
			$client->messageEntityTextUrl(
				offset : 74,
				length : 5,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 85,
				length : 86,
				user_id : 2788240484820218891,
			),
			$client->inputMessageEntityMentionName(
				offset : 2,
				length : 75,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 99,
				length : 37,
			),
			$client->messageEntityCashtag(
				offset : 30,
				length : 11,
			),
			$client->messageEntityUnderline(
				offset : 41,
				length : 73,
			),
			$client->messageEntityStrike(
				offset : 74,
				length : 2,
			),
			$client->messageEntityBankCard(
				offset : 63,
				length : 95,
			),
			$client->messageEntitySpoiler(
				offset : 45,
				length : 34,
			),
			$client->messageEntityCustomEmoji(
				offset : 5,
				length : 61,
				document_id : 4498655852521082149,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 71,
				length : 16,
			),
		),
	),
	option : 'r@?U&LiveProtoͭ?w?',
);
```