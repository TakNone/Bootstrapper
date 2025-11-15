# sendMessageTextDraftAction

**Layer** : 216

```tl
sendMessageTextDraftAction#376d975c random_id:long text:TextWithEntities = SendMessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[SendMessageAction](type/SendMessageAction)

---

## Example

```php
$sendMessageAction = $client->sendMessageTextDraftAction(
	random_id : 8255536349164633856,
	text : $client->textWithEntities(
		text : 'kYcr6oKLhlswz39V',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 64,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 6,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 88,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 81,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 54,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 37,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 56,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 85,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 75,
				language : '18ncAluhvBfU35qT',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 26,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 76,
				user_id : -7044327279503902540,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 75,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 28,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 27,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 2,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 32,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 46,
				document_id : 2699368462179844851,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 7,
			),
		),
	),
);
```