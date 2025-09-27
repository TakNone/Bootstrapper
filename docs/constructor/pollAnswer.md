# pollAnswer

**Description** : *A possible answer of a poll*

**Layer** : 214

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
		text : 'p0QP5YCdDVGzNIL8',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 6,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 64,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 75,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 17,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 99,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 21,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 11,
				language : 'fgSFCcPNlaIGx6tQ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 88,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 44,
				user_id : -3400151476942147848,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 23,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 45,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 73,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 15,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 76,
				document_id : 3398345717533445910,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 79,
			),
		),
	),
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```