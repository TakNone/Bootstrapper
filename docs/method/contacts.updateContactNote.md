# contacts.updateContactNote

**Layer** : 227

```tl
contacts.updateContactNote#139f63fb id:InputUser note:TextWithEntities = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>note</mark> | [`TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->contacts->updateContactNote(
	id : $client->get_input_user(user : '@TakNone'),
	note : $client->textWithEntities(
		text : 'BQWONaws95olv21m',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 95,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 49,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 50,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 76,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 48,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 1,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 55,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 28,
				language : 'ZepovET519HPwzMU',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 94,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 89,
				user_id : 2736240064078808109,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 90,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 96,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 40,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 23,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 60,
				document_id : 4164636591822119479,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 2,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 41,
				date : 44,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 27,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 87,
				old_text : 'cHAj6gDMX1hEQoTd',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 45,
			),
		),
	),
);
```