# sendMessageTextDraftAction

**Layer** : 218

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
	random_id : 2747623337350928785,
	text : $client->textWithEntities(
		text : 'nsI5HQxAYW0CyPJ8',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 44,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 19,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 27,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 33,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 30,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 65,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 56,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 100,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 16,
				language : 'wg2XsivIBhTD5b6f',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 23,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 28,
				user_id : -6230310674594649606,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 98,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 61,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 91,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 78,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 48,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 93,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 52,
				document_id : -2930132375031848386,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 46,
			),
		),
	),
);
```