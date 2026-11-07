# todoItem

**Description** : *An item of a todo list &raquo;*

**Layer** : 233

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
	id : 55,
	title : $client->textWithEntities(
		text : 'BAoEa4rk9WRvL3Of',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 84,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 29,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 42,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 53,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 24,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 66,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 50,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 60,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 97,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 94,
				language : 'hJkxEm8Bsb21d5cR',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 80,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 83,
				user_id : -8700675606068155092,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 41,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 81,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 13,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 54,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 8,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 40,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 26,
				document_id : -1987289190240569786,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 25,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 68,
				date : 58,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 59,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 73,
				old_text : 'j5VJ3BOsD9ZfcTvQ',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 16,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 25,
			),
		),
	),
);
```