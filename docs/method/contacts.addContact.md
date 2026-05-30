# contacts.addContact

**Description** : *Add an existing telegram user as contact*

**Layer** : 225

```tl
contacts.addContact#d9ba2e54 flags:# add_phone_privacy_exception:flags.0?true id:InputUser first_name:string last_name:string phone:string note:flags.1?TextWithEntities = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : $client->get_input_user(user : '@TakNone'),
	first_name : 'Tak',
	last_name : 'None',
	phone : '+1234567890',
	note : $client->textWithEntities(
		text : 'rsGbJYDyNR3lpo1V',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 7,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 77,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 21,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 11,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 45,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 97,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 54,
				language : 'UmAYKPeuSwNna7Li',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 2,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 93,
				user_id : 5665434215427221720,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 64,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 47,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 18,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 0,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 74,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 3,
				document_id : 8152901113677195384,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 60,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 39,
				date : 90,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 31,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 40,
				old_text : '7WlvUNgt40diuGnj',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 57,
			),
		),
	),
);
```