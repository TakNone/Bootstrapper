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
	random_id : 3827046232020545066,
	text : $client->textWithEntities(
		text : 'rUMyv7P0sOxF3WzT',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 32,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 71,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 41,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 18,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 40,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 69,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 10,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 9,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 55,
				language : 'OJsM1xKrnXbwayCA',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 9,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 85,
				user_id : 7378887081823633450,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 23,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 47,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 75,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 15,
				document_id : -7717223244121498574,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 8,
			),
		),
	),
);
```