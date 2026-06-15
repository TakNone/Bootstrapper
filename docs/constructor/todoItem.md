# todoItem

**Description** : *An item of a todo list &raquo;*

**Layer** : 227

```tl
todoItem#cba9a52f id:int title:TextWithEntities = TodoItem;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | ID of the item, a positive (non-zero) integer unique within the current list |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | Text of the item, maximum length equal to todo_item_length_max » |

---

## Type

[TodoItem](type/TodoItem)

---

## Example

```php
$todoItem = $client->todoItem(
	id : 65,
	title : $client->textWithEntities(
		text : 'xc1zgpv70WZklqBj',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 72,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 14,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 83,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 83,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 49,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 54,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 68,
				language : '86Dh0ypkxjB4rLXJ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 52,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 78,
				user_id : -5885032901702464255,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 59,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 34,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 30,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 55,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 39,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 48,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 56,
				document_id : -5824222150056879868,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 34,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 8,
				date : 86,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 32,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 16,
				old_text : 'eMG9RUC0frWmTQ7N',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 92,
			),
		),
	),
);
```