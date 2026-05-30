# inputPhoneContact

**Description** : *Phone contact*

**Layer** : 225

```tl
inputPhoneContact#6a1dc4be flags:# client_id:long phone:string first_name:string last_name:string note:flags.0?TextWithEntities = InputContact;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>client_id</mark> | [`long`](type/long) | An arbitrary 64-bit integer: it should be set, for example, to an incremental number when using contacts.importContacts, in order to retry importing only the contacts that weren't imported successfully, according to the client_ids returned in contacts.importedContacts.retry_contacts |
| <mark>phone</mark> | [`string`](type/string) | Phone number |
| <mark>first_name</mark> | [`string`](type/string) | Contact's first name |
| <mark>last_name</mark> | [`string`](type/string) | Contact's last name |
| **note** | [`flags.0?TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[InputContact](type/InputContact)

---

## Example

```php
$inputContact = $client->inputPhoneContact(
	client_id : -22148746783148712,
	phone : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
	note : $client->textWithEntities(
		text : '1BT2otzc9RrdyFmO',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 64,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 58,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 80,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 14,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 24,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 54,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 31,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 53,
				language : 'GTzk5QZU2ux96nW7',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 70,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 3,
				user_id : 871014569044134591,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 97,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 89,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 59,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 29,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 95,
				document_id : 6354549275352906240,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 80,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 17,
				date : 26,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 13,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 55,
				old_text : 'pFaUsYwGfqJV2vN4',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 15,
			),
		),
	),
);
```