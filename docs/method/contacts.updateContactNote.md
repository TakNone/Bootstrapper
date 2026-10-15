# contacts.updateContactNote

**Description** : *Update the private note associated to a contact; see here &raquo; for more info*

**Layer** : 229

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
		text : 'o7wRhELNJWyasUMI',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 2,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 73,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 3,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 50,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 13,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 27,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 74,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 91,
				language : 'SlcHGCRsqZ5Vx0pv',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 5,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 85,
				user_id : -6399423750523472500,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 0,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 79,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 56,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 54,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 80,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 32,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 11,
				document_id : -980612718492893489,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 87,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 79,
				date : 67,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 33,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 97,
				old_text : 'MqLb6xuOkwsRFK1i',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 83,
			),
		),
	),
);
```