# todoItem

**Layer** : 211

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
	id : 26,
	title : $client->textWithEntities(
		text : 'P6wZ3AHbUEiDkKuN',
		entities : array(
			$client->messageEntityUnknown(
				offset : 50,
				length : 91,
			),
			$client->messageEntityMention(
				offset : 52,
				length : 88,
			),
			$client->messageEntityHashtag(
				offset : 94,
				length : 25,
			),
			$client->messageEntityBotCommand(
				offset : 39,
				length : 79,
			),
			$client->messageEntityUrl(
				offset : 10,
				length : 47,
			),
			$client->messageEntityEmail(
				offset : 65,
				length : 20,
			),
			$client->messageEntityBold(
				offset : 93,
				length : 81,
			),
			$client->messageEntityItalic(
				offset : 79,
				length : 17,
			),
			$client->messageEntityCode(
				offset : 57,
				length : 1,
			),
			$client->messageEntityPre(
				offset : 84,
				length : 84,
				language : 'lqpu8j2COIAkGQSE',
			),
			$client->messageEntityTextUrl(
				offset : 33,
				length : 80,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 9,
				length : 91,
				user_id : -8804477241483027574,
			),
			$client->inputMessageEntityMentionName(
				offset : 57,
				length : 43,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 50,
				length : 24,
			),
			$client->messageEntityCashtag(
				offset : 97,
				length : 90,
			),
			$client->messageEntityUnderline(
				offset : 48,
				length : 44,
			),
			$client->messageEntityStrike(
				offset : 42,
				length : 6,
			),
			$client->messageEntityBankCard(
				offset : 41,
				length : 93,
			),
			$client->messageEntitySpoiler(
				offset : 56,
				length : 27,
			),
			$client->messageEntityCustomEmoji(
				offset : 54,
				length : 69,
				document_id : -1154712166038119699,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 55,
				length : 81,
			),
		),
	),
);
```