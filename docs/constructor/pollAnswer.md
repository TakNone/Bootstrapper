# pollAnswer

**Description** : *A possible answer of a poll*

**Layer** : 216

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
		text : 'WI2C9pzDHbeXMlx6',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 91,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 59,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 40,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 20,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 53,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 91,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 7,
				language : 'YBLuSZ1gMoe8Vpqx',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 93,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 12,
				user_id : 4238136966240675494,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 10,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 14,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 43,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 95,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 34,
				document_id : -9122608470054985301,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 39,
			),
		),
	),
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```