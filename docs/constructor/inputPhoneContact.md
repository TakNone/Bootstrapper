# inputPhoneContact

**Description** : *Phone contact*

**Layer** : 233

```tl
inputPhoneContact#6a1dc4be flags:# client_id:long phone:string first_name:string last_name:string note:flags.0?TextWithEntities = InputContact;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>client_id</mark> | [`long`](type/long) | An arbitrary 64-bit integer: it should be set, for example, to an incremental number when using contacts.importContacts, in order to retry importing only the contacts that weren't imported successfully, according to the client_ids returned in contacts.importedContacts.retry_contacts |
| <mark>phone</mark> | [`string`](type/string) | Phone number |
| <mark>first_name</mark> | [`string`](type/string) | Contact's first name |
| <mark>last_name</mark> | [`string`](type/string) | Contact's last name |
| **note** | [`flags.0?TextWithEntities`](type/TextWithEntities) | A private note for this contact, only visible to us; see here » for more info on contact notes |

---

## Type

[InputContact](type/InputContact)

---

## Example

```php
$inputContact = $client->inputPhoneContact(
	client_id : 3591018816602710563,
	phone : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
	note : $client->textWithEntities(
		text : 'IsY5oLkx4yHdr8pO',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 67,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 16,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 39,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 31,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 100,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 3,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 10,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 28,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 82,
				language : 'JYPnt3K4a7Vz0vpk',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 40,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 41,
				user_id : 2379588233002590897,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 12,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 4,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 63,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 7,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 42,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 33,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 51,
				document_id : -9103462763580776642,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 71,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 97,
				date : 98,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 6,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 95,
				old_text : 'IsP0VfuOx4bwaCk9',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 36,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 44,
			),
		),
	),
);
```