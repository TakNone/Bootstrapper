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
		text : 'KPj4Mom3NLCpdBxS',
		entities : array(
			$client->messageEntityUnknown(
				offset : 8,
				length : 49,
			),
			$client->messageEntityMention(
				offset : 58,
				length : 75,
			),
			$client->messageEntityHashtag(
				offset : 46,
				length : 61,
			),
			$client->messageEntityBotCommand(
				offset : 36,
				length : 100,
			),
			$client->messageEntityUrl(
				offset : 91,
				length : 9,
			),
			$client->messageEntityEmail(
				offset : 99,
				length : 93,
			),
			$client->messageEntityBold(
				offset : 43,
				length : 22,
			),
			$client->messageEntityItalic(
				offset : 35,
				length : 70,
			),
			$client->messageEntityCode(
				offset : 28,
				length : 22,
			),
			$client->messageEntityPre(
				offset : 5,
				length : 60,
				language : 'nz9ubwegJrxqaGDM',
			),
			$client->messageEntityTextUrl(
				offset : 94,
				length : 4,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 32,
				length : 22,
				user_id : 5292005516698282356,
			),
			$client->inputMessageEntityMentionName(
				offset : 80,
				length : 21,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 68,
				length : 16,
			),
			$client->messageEntityCashtag(
				offset : 91,
				length : 12,
			),
			$client->messageEntityUnderline(
				offset : 90,
				length : 11,
			),
			$client->messageEntityStrike(
				offset : 62,
				length : 68,
			),
			$client->messageEntityBankCard(
				offset : 30,
				length : 58,
			),
			$client->messageEntitySpoiler(
				offset : 6,
				length : 70,
			),
			$client->messageEntityCustomEmoji(
				offset : 7,
				length : 34,
				document_id : 4976946847838764973,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 28,
				length : 67,
			),
		),
	),
	option : 'm??ALiveProto?e??/',
);
```