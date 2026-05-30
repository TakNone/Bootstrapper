# contacts.updateContactNote

**Layer** : 225

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
		text : '5wduvK1ZbrPWG2L7',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 29,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 62,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 86,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 72,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 48,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 11,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 3,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 8,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 95,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 52,
				language : 'dBMazHg8wRAX9n2G',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 57,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 17,
				user_id : 7260155731318385681,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 32,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 91,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 33,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 52,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 80,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 85,
				document_id : 4301290406229163287,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 78,
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
				date : 53,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 2,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 4,
				old_text : 'u3ZxHzMTkBCYUcVj',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 32,
			),
		),
	),
);
```