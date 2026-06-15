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
	id : 29,
	title : $client->textWithEntities(
		text : 'lDon6sygLrqTf7ap',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 70,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 99,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 1,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 25,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 65,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 56,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 70,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 42,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 50,
				language : 'RPxJ5AD1j94S0dFY',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 87,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 44,
				user_id : -511106141422206231,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 27,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 6,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 97,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 27,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 59,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 26,
				document_id : 2302962659281801483,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 59,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 12,
				date : 99,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 10,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 4,
				old_text : 'yweZWlRQ6KcXnOSk',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 28,
			),
		),
	),
);
```