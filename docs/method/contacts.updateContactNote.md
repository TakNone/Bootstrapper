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
		text : 'oGep8x237FS1wI6M',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 52,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 67,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 27,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 1,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 19,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 88,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 91,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 25,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 80,
				language : 'ceMtSTpGPFgly40o',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 23,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 42,
				user_id : 3242467290217457993,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 43,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 8,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 50,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 25,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 13,
				document_id : 6325016394184369094,
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
				length : 70,
				date : 34,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 20,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 73,
				old_text : 'ORlSNAcIVGkC641n',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 74,
			),
		),
	),
);
```