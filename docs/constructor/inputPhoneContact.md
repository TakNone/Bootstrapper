# inputPhoneContact

**Description** : *Phone contact*

**Layer** : 227

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
	client_id : -4200840610995503308,
	phone : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
	note : $client->textWithEntities(
		text : 'Cjo5Na7ypcR1lKQu',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 5,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 4,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 38,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 29,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 14,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 93,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 7,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 11,
				language : '4k2mjlOPEnaI1zSR',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 31,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : -3364752562155137626,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 51,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 34,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 78,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 43,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 52,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 35,
				document_id : 3363005127700571711,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 62,
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
				date : 29,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 5,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 34,
				old_text : 'qhaYl40MtRuWDwIV',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 57,
			),
		),
	),
);
```