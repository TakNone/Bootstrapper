# todoItem

**Description** : *An item of a todo list &raquo;*

**Layer** : 225

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
	id : 77,
	title : $client->textWithEntities(
		text : 'CGvJTfL6InEZz3NA',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 83,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 73,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 84,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 34,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 52,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 20,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 94,
				language : 'ymwsxTGUgB2MSjNd',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 56,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 48,
				user_id : -3638424278456937825,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 95,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 74,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 42,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 15,
				document_id : -8028454789658313894,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 49,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 72,
				date : 88,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 65,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 56,
				old_text : 'FUp21PksATdLg4Sb',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 86,
			),
		),
	),
);
```