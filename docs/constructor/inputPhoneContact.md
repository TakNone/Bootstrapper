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
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
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
	client_id : -1716744191419233188,
	phone : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
	note : $client->textWithEntities(
		text : 'Uc2l9kC3vRFQm5Yy',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 80,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 96,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 2,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 12,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 30,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 82,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 31,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 85,
				language : 'mBin5vfAl0GIb9JV',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 72,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 64,
				user_id : -5122792787610996619,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 79,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 51,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 90,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 3,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 19,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 39,
				document_id : 2952464563344359901,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 48,
			),
		),
	),
);
```