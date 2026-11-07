# contacts.updateContactNote

**Description** : *Update the private note associated to a contact; see here &raquo; for more info*

**Layer** : 233

```tl
contacts.updateContactNote#139f63fb id:InputUser note:TextWithEntities = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | The contact |
| <mark>note</mark> | [`TextWithEntities`](type/TextWithEntities) | The note |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CONTACT_ID_INVALID** | `400` | The provided contact ID is invalid |
| **CONTACT_MISSING** | `400` | The specified user is not a contact |

---

## Example

```php
$bool = $client->contacts->updateContactNote(
	id : $client->get_input_user(user : '@TakNone'),
	note : $client->textWithEntities(
		text : 'uK4czjJdeLkgUPMF',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 28,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 9,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 62,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 13,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 47,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 82,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 81,
				language : 'f5nteX7HspZGa2Yx',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 100,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 54,
				user_id : 7179322736238217174,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 61,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 79,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 24,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 86,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 72,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 34,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 62,
				document_id : 9058156413181964242,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 61,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 14,
				date : 100,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 34,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 65,
				old_text : 'epxsStWIgwQ7XHad',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 78,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 8,
			),
		),
	),
);
```