# inputPhoneContact

**Description** : *Phone contact*

**Layer** : 222

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
	client_id : 8442659530844837627,
	phone : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
	note : $client->textWithEntities(
		text : 'kSOeUwpEBcyvsHqf',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 85,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 53,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 22,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 2,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 66,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 11,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 61,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 23,
				language : '5pkvJHNeWRMCIuad',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 58,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 87,
				user_id : 8406777911626108875,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 90,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 41,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 11,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 6,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 30,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 2,
				document_id : -7466108030681792169,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 89,
			),
		),
	),
);
```