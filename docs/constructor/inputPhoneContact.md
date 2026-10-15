# inputPhoneContact

**Description** : *Phone contact*

**Layer** : 229

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
	client_id : -4986846066983690193,
	phone : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
	note : $client->textWithEntities(
		text : 'pHsfOB2PdyRzNqY7',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 15,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 15,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 85,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 71,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 96,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 58,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 32,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 28,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 52,
				language : 'MDjSug0APY53lrXJ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 87,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 85,
				user_id : 2630993116179070810,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 96,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 57,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 63,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 42,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 21,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 32,
				document_id : -3022626711561264311,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 85,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 58,
				date : 100,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 28,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 44,
				old_text : 'lvPDMAI4ps3ULouJ',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 95,
			),
		),
	),
);
```