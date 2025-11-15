# pollAnswer

**Description** : *A possible answer of a poll*

**Layer** : 218

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
		text : 'xwt1pDmKOk5rV4z0',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 2,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 35,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 28,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 10,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 83,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 73,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 54,
				language : 'MlCygpErDU0Z8v6i',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 83,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 64,
				user_id : -4926036818536969903,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 38,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 38,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 57,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 50,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 3,
				document_id : 2220999299159370507,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 61,
			),
		),
	),
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```