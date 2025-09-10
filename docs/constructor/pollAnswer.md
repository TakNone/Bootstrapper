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
		text : 'YMzhgwTi3yC2VmOq',
		entities : array(
			$client->messageEntityUnknown(
				offset : 98,
				length : 62,
			),
			$client->messageEntityMention(
				offset : 36,
				length : 4,
			),
			$client->messageEntityHashtag(
				offset : 4,
				length : 75,
			),
			$client->messageEntityBotCommand(
				offset : 39,
				length : 46,
			),
			$client->messageEntityUrl(
				offset : 42,
				length : 98,
			),
			$client->messageEntityEmail(
				offset : 90,
				length : 66,
			),
			$client->messageEntityBold(
				offset : 67,
				length : 6,
			),
			$client->messageEntityItalic(
				offset : 43,
				length : 22,
			),
			$client->messageEntityCode(
				offset : 34,
				length : 9,
			),
			$client->messageEntityPre(
				offset : 18,
				length : 34,
				language : 'xbVHcD7r1Zonzqai',
			),
			$client->messageEntityTextUrl(
				offset : 54,
				length : 4,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 16,
				length : 37,
				user_id : -1178812503270668814,
			),
			$client->inputMessageEntityMentionName(
				offset : 82,
				length : 35,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 57,
				length : 87,
			),
			$client->messageEntityCashtag(
				offset : 76,
				length : 40,
			),
			$client->messageEntityUnderline(
				offset : 14,
				length : 98,
			),
			$client->messageEntityStrike(
				offset : 85,
				length : 15,
			),
			$client->messageEntityBankCard(
				offset : 77,
				length : 60,
			),
			$client->messageEntitySpoiler(
				offset : 92,
				length : 75,
			),
			$client->messageEntityCustomEmoji(
				offset : 63,
				length : 83,
				document_id : -1043342992125149274,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 28,
				length : 89,
			),
		),
	),
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```