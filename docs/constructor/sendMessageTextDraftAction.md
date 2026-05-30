# sendMessageTextDraftAction

**Layer** : 222

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
	random_id : -8892907597687746865,
	text : $client->textWithEntities(
		text : 'nXOMlcuvzUbCyG06',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 71,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 51,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 72,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 30,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 90,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 38,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 58,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 45,
				language : 'rMYjoDJQueXwCsV6',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 67,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : 8289152485454300121,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 100,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 75,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 92,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 86,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 33,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 10,
				document_id : -2460181438271016737,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 81,
			),
		),
	),
);
```