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
	client_id : -8916580733881381907,
	phone : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
	note : $client->textWithEntities(
		text : 'U9w7cKfV5NQ8C2AB',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 5,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 46,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 70,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 81,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 79,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 88,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 60,
				language : 'ELw8rFjMONAJufbG',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 23,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 75,
				user_id : 4221847761525684058,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 80,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 56,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 100,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 76,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 38,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 53,
				document_id : -2203125366081563814,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 46,
			),
		),
	),
);
```