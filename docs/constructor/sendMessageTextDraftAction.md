# sendMessageTextDraftAction

**Layer** : 225

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
	random_id : 4341867608634160265,
	text : $client->textWithEntities(
		text : 'SwRv3piIyFqYnuQD',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 94,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 89,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 9,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 73,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 76,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 95,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 82,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 60,
				language : 'iBUkInolysYc018e',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 49,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 78,
				user_id : 5112310976308229571,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 82,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 42,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 80,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 100,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 66,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 58,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 49,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 58,
				document_id : 5085497766278309912,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 62,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 35,
				date : 89,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 25,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 86,
				old_text : 'oLckUaDyQMvti7zd',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 11,
			),
		),
	),
);
```