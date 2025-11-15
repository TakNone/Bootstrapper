# inputPhoneContact

**Description** : *Phone contact*

**Layer** : 218

```tl
inputPhoneContact#6a1dc4be flags:# client_id:long phone:string first_name:string last_name:string note:flags.0?TextWithEntities = InputPhoneContact;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>client_id</mark> | [`long`](type/long) | An arbitrary 64-bit integer: it should be set, for example, to an incremental number when using contacts.importContacts, in order to retry importing only the contacts that weren't imported successfully, according to the client_ids returned in contacts.importedContacts.retry_contacts |
| <mark>phone</mark> | [`string`](type/string) | Phone number |
| <mark>first_name</mark> | [`string`](type/string) | Contact's first name |
| <mark>last_name</mark> | [`string`](type/string) | Contact's last name |
| **note** | [`flags.0?TextWithEntities`](type/TextWithEntities) | NOTHING |

---

## Type

[InputPhoneContact](type/InputPhoneContact)

---

## Example

```php
$inputPhoneContact = $client->inputPhoneContact(
	client_id : 916004053366603158,
	phone : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
	note : $client->textWithEntities(
		text : 'MZXI38RcJKNTvwrO',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 35,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 15,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 62,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 16,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 65,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 11,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 82,
				language : 'E1KZoPhVxsjQ8WUX',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 67,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 53,
				user_id : 7417776405561117467,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 46,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 89,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 34,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 68,
				document_id : -6364313148582030298,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 52,
			),
		),
	),
);
```