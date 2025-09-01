# todoItem

**Layer** : 214

```tl
todoItem#cba9a52f id:int title:TextWithEntities = TodoItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | NOTHING |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[TodoItem](type/TodoItem)

---

## Example

```php
$todoItem = $client->todoItem(
	id : 42,
	title : $client->textWithEntities(
		text : 'vCjOmneizqdkB7Yg',
		entities : array(
			$client->messageEntityUnknown(
				offset : 23,
				length : 16,
			),
			$client->messageEntityMention(
				offset : 24,
				length : 32,
			),
			$client->messageEntityHashtag(
				offset : 1,
				length : 39,
			),
			$client->messageEntityBotCommand(
				offset : 14,
				length : 5,
			),
			$client->messageEntityUrl(
				offset : 78,
				length : 86,
			),
			$client->messageEntityEmail(
				offset : 62,
				length : 10,
			),
			$client->messageEntityBold(
				offset : 46,
				length : 64,
			),
			$client->messageEntityItalic(
				offset : 52,
				length : 64,
			),
			$client->messageEntityCode(
				offset : 44,
				length : 13,
			),
			$client->messageEntityPre(
				offset : 14,
				length : 11,
				language : 'tzCbw3RysQEK6aZe',
			),
			$client->messageEntityTextUrl(
				offset : 67,
				length : 37,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 15,
				length : 50,
				user_id : 5665650709321314789,
			),
			$client->inputMessageEntityMentionName(
				offset : 2,
				length : 15,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 59,
				length : 81,
			),
			$client->messageEntityCashtag(
				offset : 86,
				length : 49,
			),
			$client->messageEntityUnderline(
				offset : 19,
				length : 79,
			),
			$client->messageEntityStrike(
				offset : 11,
				length : 72,
			),
			$client->messageEntityBankCard(
				offset : 60,
				length : 41,
			),
			$client->messageEntitySpoiler(
				offset : 88,
				length : 55,
			),
			$client->messageEntityCustomEmoji(
				offset : 16,
				length : 87,
				document_id : 7858668740074343891,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 17,
				length : 96,
			),
		),
	),
);
```