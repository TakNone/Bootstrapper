# messages.composedMessageWithAI

**Layer** : 227

```tl
messages.composedMessageWithAI#90d7adfa flags:# result_text:TextWithEntities diff_text:flags.0?TextWithEntities = messages.ComposedMessageWithAI;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>result_text</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |
| **diff_text** | [`flags.0?TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[messages.ComposedMessageWithAI](type/messages.ComposedMessageWithAI)

---

## Example

```php
$messagesComposedMessageWithAI = $client->messages->composedMessageWithAI(
	result_text : $client->textWithEntities(
		text : 'Uvh3fDO16esFC4Ap',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 46,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 96,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 69,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 95,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 41,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 78,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 43,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 34,
				language : '2x96WXe43Pd8rUVw',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 93,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 100,
				user_id : 18663230131865116,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 34,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 91,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 19,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 53,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 78,
				document_id : -1617045264900389413,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 98,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 50,
				date : 19,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 71,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 75,
				old_text : 'p7jkrvbLXUHQBsDm',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 16,
			),
		),
	),
	diff_text : $client->textWithEntities(
		text : 'xzDGhkiqOQ7PylTe',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 76,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 42,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 84,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 77,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 6,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 99,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 64,
				language : 'aDIWC1J0Nr7OPd4s',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 86,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 83,
				user_id : 6993927221978845018,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 74,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 45,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 71,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 16,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 53,
				document_id : -4545105963195249600,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 66,
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
				date : 5,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 1,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 50,
				old_text : '9wYy3nLRG5uHs4aU',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 34,
			),
		),
	),
);
```