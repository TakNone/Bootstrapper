# contacts.updateContactNote

**Layer** : 222

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
		text : 'wbHkXMFom3QlWPAJ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 12,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 30,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 75,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 61,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 51,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 68,
				language : 'lcSes58T7FboU0Zy',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 81,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 94,
				user_id : 1548622080835219485,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 66,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 88,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 92,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 21,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 47,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 99,
				document_id : -1774549496145137934,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 35,
			),
		),
	),
);
```