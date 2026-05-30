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
	random_id : -6522667866842508086,
	text : $client->textWithEntities(
		text : 'rx4cUm7Ruv6LgjH8',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 11,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 63,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 10,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 21,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 34,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 6,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 50,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 17,
				language : 'BoItE5rNy0sxaGSA',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 60,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 58,
				user_id : 7733964180495454945,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 58,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 42,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 29,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 76,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 61,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 80,
				document_id : 7146015803859863863,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 84,
			),
		),
	),
);
```