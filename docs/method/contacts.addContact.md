# contacts.addContact

**Description** : *Add an existing telegram user as contact*

**Layer** : 216

```tl
contacts.addContact#d9ba2e54 flags:# add_phone_privacy_exception:flags.0?true id:InputUser first_name:string last_name:string phone:string note:flags.1?TextWithEntities = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **add_phone_privacy_exception** | [`flags.0?true`](type/true) | Allow the other user to see our phone number? |
| <mark>id</mark> | [`InputUser`](type/InputUser) | Telegram ID of the other user |
| <mark>first_name</mark> | [`string`](type/string) | First name |
| <mark>last_name</mark> | [`string`](type/string) | Last name |
| <mark>phone</mark> | [`string`](type/string) | User's phone number, may be omitted to simply add the user to the contact list, without a phone number |
| **note** | [`flags.1?TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CONTACT_ID_INVALID** | `400` | The provided contact ID is invalid |
| **CONTACT_NAME_EMPTY** | `400` | Contact name empty |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$updates = $client->contacts->addContact(
	add_phone_privacy_exception : true,
	id : $client->inputUserEmpty(),
	first_name : 'Tak',
	last_name : 'None',
	phone : '+1234567890',
	note : $client->textWithEntities(
		text : 'dtXVgFT3pfskNEhB',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 7,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 26,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 23,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 38,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 81,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 22,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 15,
				language : 'ylziEpVQ0LouUOrH',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 67,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 48,
				user_id : -5527190264501756739,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 0,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 17,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 84,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 83,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 48,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 84,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 18,
				document_id : 5932651337704915591,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 6,
			),
		),
	),
);
```