# contacts.addContact

**Description** : *Add an existing telegram user as contact*

**Layer** : 233

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
| **note** | [`flags.1?TextWithEntities`](type/TextWithEntities) | A private note for this contact, only visible to us; see here » for more info on contact notes |

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
		text : '03h5C6sSmiylpVue',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 98,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 85,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 37,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 67,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 40,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 98,
				language : 'xElbuAr7FURSyJ2n',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 54,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : -6598323320578806243,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 57,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 15,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 58,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 29,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 30,
				document_id : -8258622039419999910,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 77,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 73,
				date : 58,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 42,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 19,
				old_text : 'AoHDz6nbeqtWxC37',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 4,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 95,
			),
		),
	),
);
```